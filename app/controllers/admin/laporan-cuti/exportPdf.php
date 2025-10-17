<?php
require_once __DIR__ . '/../../../configs/database.php';
require_once __DIR__ . '/../../../libraries/FPDF-master/fpdf.php'; // pastikan folder fpdf ada di libraries/

// Ambil filter status (jika ada)
$status = isset($_GET['status']) ? $_GET['status'] : '';

// Query data cuti + user
$sql = "SELECT cuti.*, users.nama_lengkap 
        FROM cuti 
        JOIN users ON cuti.user_id = users.id";

if (!empty($status)) {
    $sql .= " WHERE cuti.status = '$status'";
}

$sql .= " ORDER BY cuti.created_at DESC";
$result = $db->query($sql);

// Siapkan PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Judul
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN CUTI PEGAWAI', 0, 1, 'C');
$pdf->Ln(5);

// Filter status
if ($status) {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Status: ' . ucfirst($status), 0, 1, 'L');
}

// Header tabel
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 10, 'No', 1, 0, 'C');
$pdf->Cell(40, 10, 'Nama', 1, 0, 'C');
$pdf->Cell(30, 10, 'Tgl Mulai', 1, 0, 'C');
$pdf->Cell(30, 10, 'Tgl Selesai', 1, 0, 'C');
$pdf->Cell(55, 10, 'Alasan', 1, 0, 'C');
$pdf->Cell(25, 10, 'Status', 1, 1, 'C');

// Isi tabel
$pdf->SetFont('Arial', '', 10);
$no = 1;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(10, 10, $no++, 1, 0, 'C');
        $pdf->Cell(40, 10, $row['nama_lengkap'], 1, 0, 'L');
        $pdf->Cell(30, 10, $row['tanggal_mulai'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['tanggal_selesai'], 1, 0, 'C');
        $pdf->Cell(55, 10, substr($row['alasan'], 0, 40), 1, 0, 'L');
        $pdf->Cell(25, 10, ucfirst($row['status']), 1, 1, 'C');
    }
} else {
    $pdf->Cell(190, 10, 'Tidak ada data cuti.', 1, 1, 'C');
}

// Output PDF
$pdf->Output('D', 'laporan_cuti.pdf');
exit;
?>
