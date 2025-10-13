<?php
include "../../../controllers/user/beranda/userBerandaController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/user/beranda/userBeranda.css">
</head>
<body>
    <?php require "../../../components/user/sidebar/userSidebar.php" ?>
    <main>
        <div class="container">
            <?php require "../../../components/welcome/welcome.php" ?>
            <?php require "../../../components/user/beranda/status/userBerandaStatus.php" ?>
        </div>
    </main>

    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
</body>
</html>