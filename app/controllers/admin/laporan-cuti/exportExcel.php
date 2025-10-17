<?php
// === INCLUDE DATABASE ===
include __DIR__ . "/../../../../configs/database.php";

// === INCLUDE PHPSPREADSHEET MANUAL ===
require_once __DIR__ . '/../../../libraries/PhpSpreadsheet/src/Bootstrap.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// === FILTER (opsional) ===
$statusFilter = isset($_GET['status']) ? $_GET['status'] : 'semua';
$namaFilter = isset($_GET['nama']) ? $_GET['nama'] : '';
$tanggalMulai = isset($_GET['tanggal_mulai']) ? $_GET['tanggal_mulai'] : '';
$tanggalSelesai = isset($_GET['tanggal_selesai']) ? $_GET['tanggal_selesai'] : '';

// === QUERY DATA ===
$sql = "SELECT cuti.*, users.nama_lengkap 
        FROM cuti 
        JOIN users ON cuti.user_id = users.id 
        WHERE 1=1";

if ($statusFilter !== 'semua') {
    $sql .= " AND cuti.status = '$statusFilter'";
}
if (!empty($namaFilter)) {
    $sql .= " AND users.nama_lengkap LIKE '%$namaFilter%'";
}
if (!empty($tanggalMulai) && !empty($tanggalSelesai)) {
    $sql .= " AND cuti.tanggal_mulai BETWEEN '$tanggalMulai' AND '$tanggalSelesai'";
}

$sql .= " ORDER BY cuti.created_at DESC";

$result = $db->query($sql);

// === BUAT SPREADSHEET ===
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Tanggal Mulai');
$sheet->setCellValue('D1', 'Tanggal Selesai');
$sheet->setCellValue('E1', 'Alasan');
$sheet->setCellValue('F1', 'Status');

$rowNum = 2;
$no = 1;

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNum, $no++);
        $sheet->setCellValue('B' . $rowNum, $row['nama_lengkap']);
        $sheet->setCellValue('C' . $rowNum, $row['tanggal_mulai']);
        $sheet->setCellValue('D' . $rowNum, $row['tanggal_selesai']);
        $sheet->setCellValue('E' . $rowNum, $row['alasan']);
        $sheet->setCellValue('F' . $rowNum, ucfirst($row['status']));
        $rowNum++;
    }
} else {
    $sheet->setCellValue('A2', 'Tidak ada data');
}

// === STYLE OTOMATIS ===
foreach (range('A', 'F') as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// === EXPORT KE FILE ===
$filename = "Laporan_Cuti_" . date('Y-m-d_H-i-s') . ".xlsx";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
