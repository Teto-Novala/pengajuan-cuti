<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:../../../views/login/loginView.php");
    exit;
}
include "../../../configs/database.php";

$user_id=$_SESSION['user_id'];
if (isset($_POST['pengajuan'])) {
    $tanggal_mulai   = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $alasan          = $_POST['alasan'];

    // Validasi sederhana
    if (empty($tanggal_mulai) || empty($tanggal_selesai) || empty($alasan)) {
        echo "<script>alert('Semua field harus diisi!');</script>";
    } else {
        // Insert ke database
        $sql = "INSERT INTO cuti (user_id, tanggal_mulai, tanggal_selesai, alasan, status) 
                VALUES ('$user_id', '$tanggal_mulai', '$tanggal_selesai', '$alasan', 'menunggu')";

        if ($db->query($sql) === TRUE) {
            echo "<script>
                    alert('Pengajuan cuti berhasil dikirim!');
                  </script>";
        } else {
            echo "<script>alert('Gagal mengirim pengajuan: " . $db->error . "');</script>";
        }
    }
}
?>