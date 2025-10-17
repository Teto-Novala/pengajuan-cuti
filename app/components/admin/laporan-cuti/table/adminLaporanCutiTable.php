<?php
include __DIR__ . "/../../../../configs/database.php";

$statusFilter   = $_GET['status'] ?? 'semua';
$tanggalMulai   = $_GET['mulai'] ?? '';
$tanggalSelesai = $_GET['selesai'] ?? '';
$namaFilter     = $_GET['nama'] ?? '';

$sql = "SELECT cuti.*, users.nama_lengkap 
        FROM cuti 
        JOIN users ON cuti.user_id = users.id 
        WHERE 1=1";

// Filter status
if ($statusFilter !== 'semua') {
  $sql .= " AND cuti.status = '$statusFilter'";
}

// Filter tanggal
if (!empty($tanggalMulai) && !empty($tanggalSelesai)) {
  $sql .= " AND (cuti.tanggal_mulai BETWEEN '$tanggalMulai' AND '$tanggalSelesai')";
} elseif (!empty($tanggalMulai)) {
  $sql .= " AND cuti.tanggal_mulai >= '$tanggalMulai'";
} elseif (!empty($tanggalSelesai)) {
  $sql .= " AND cuti.tanggal_selesai <= '$tanggalSelesai'";
}

// Filter nama
if (!empty($namaFilter)) {
  $sql .= " AND users.nama_lengkap LIKE '%$namaFilter%'";
}

$sql .= " ORDER BY cuti.created_at DESC";

$result = $db->query($sql);
?>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Alasan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if ($result && $result->num_rows > 0) {
      $no = 1;
      while ($row = $result->fetch_assoc()) {
        $status = $row['status'];
        $statusClass = '';
        if ($status === 'menunggu') $statusClass = 'status-menunggu';
        if ($status === 'ditolak') $statusClass = 'status-ditolak';
        if ($status === 'diterima') $statusClass = 'status-diterima';
    ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['nama_lengkap']) ?></td>
        <td><?= htmlspecialchars($row['tanggal_mulai']) ?></td>
        <td><?= htmlspecialchars($row['tanggal_selesai']) ?></td>
        <td><?= htmlspecialchars($row['alasan']) ?></td>
        <td><span class="status <?= $statusClass ?>"><?= ucfirst($status) ?></span></td>
      </tr>
    <?php 
      }
    } else { 
    ?>
      <tr><td colspan="6" style="text-align:center;">Belum ada data cuti</td></tr>
    <?php } ?>
  </tbody>
</table>
