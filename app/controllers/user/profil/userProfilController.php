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
    $data=$result->fetch_assoc();
}

?>