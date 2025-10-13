<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:../../../views/login/loginView.php");
    exit;
}
include "../../../configs/database.php";


$user_id=$_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $db->query($sql);

if($result->num_rows > 0){
    $data_user=$result->fetch_assoc();
}

$sql_status = "SELECT status, COUNT(id) AS jumlah_cuti 
        FROM cuti 
        WHERE user_id = '$user_id' 
        GROUP BY status";

$result_status = $db->query($sql_status);
$data_status = [
    'diterima' => 0,
    'ditolak' => 0,
    'menunggu' => 0
];
if($result_status && $result_status->num_rows > 0){
    while ($row = $result_status->fetch_assoc()) {
        $data_status[$row['status']] = $row['jumlah_cuti'];
    }
}

$sql_histori = "SELECT * FROM cuti WHERE user_id = '$user_id' ORDER BY created_at DESC LIMIT 4";
$result_histori = $db->query($sql_histori);

?>