<?php
include __DIR__ . "/../../../../configs/database.php";

$statusFilter = isset($_GET['status']) ? $_GET['status'] : 'menunggu';

$sql = "SELECT cuti.*, users.nama_lengkap 
        FROM cuti 
        JOIN users ON cuti.user_id = users.id 
        WHERE cuti.status = '$statusFilter'
        ORDER BY cuti.created_at DESC";
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
      <?php if ($statusFilter === 'menunggu') echo "<th>Aksi</th>"; ?>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($result && $result->num_rows > 0) {
          $no = 1;
          while ($row = $result->fetch_assoc()) {
              $statusClass = strtolower($row['status']);
              echo "<tr class='tr-head'>
                      <td>{$no}</td>
                      <td>{$row['nama_lengkap']}</td>
                      <td>{$row['tanggal_mulai']}</td>
                      <td>{$row['tanggal_selesai']}</td>
                      <td>{$row['alasan']}</td>
                      <td><span class='status {$statusClass}'>" . ucfirst($row['status']) . "</span></td>";
              
              // tombol aksi hanya muncul jika status menunggu
              if ($statusFilter === 'menunggu') {
                echo "<td>
                        <button class='btn-aksi diterima' data-id='{$row['id']}' data-status='diterima'>Terima</button>
                        <button class='btn-aksi ditolak' data-id='{$row['id']}' data-status='ditolak'>Tolak</button>
                      </td>";
              }

              echo "</tr>";
              $no++;
          }
      } else {
          $colspan = ($statusFilter === 'menunggu') ? 7 : 6;
          echo "<tr><td colspan='{$colspan}' style='text-align:center;'>Belum ada data cuti</td></tr>";
      }
    ?>
  </tbody>
</table>
