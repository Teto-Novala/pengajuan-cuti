<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:../../../views/login/loginView.php");
    exit;
}
include "../../../configs/database.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM cuti WHERE user_id = '$user_id' ORDER BY created_at DESC";
$result = $db->query($sql);
?>
