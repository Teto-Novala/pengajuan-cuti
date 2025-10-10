<?php
include "../../configs/database.php";

session_start();

$username_show=false;
$msg="username atau password salah";

if (isset($_POST['login'])){
    $username_show=false;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);
    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $_SESSION['user_id'] = $data['id'];
        if($data['role']=='user'){
            header("Location:../../views/user/beranda/userBeranda.php");
        }else {
            header("Location:../../views/admin/beranda/adminBeranda.php");
        }
        exit;
    }else{
        $username_show=true;
    };
};
?>