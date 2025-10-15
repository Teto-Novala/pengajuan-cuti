<?php
include "../../../controllers/admin/mengelola-cuti/adminMengelolaCutiController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/admin/mengelola-cuti/adminMengelolaCuti.css">
</head>
<body>
    <?php require "../../../components/admin/sidebar/adminSidebar.php" ?>
    <main>
        <div class="container">
            <?php require "../../../components/admin/sidebar-desktop/adminSidebarDesktop.php" ?>
            <div class="container-main">
                <div class="mengelola">
                    <h1>Mengelola Cuti</h1>
                    <?php require "../../../components/admin/mengelola-cuti/status/adminMengelolaStatus.php" ?>
                    <div class="container-table" id="tabel-cuti">
                        <?php include "../../../components/admin/mengelola-cuti/table/adminMengelolaTabel.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
    <script src="../../../../public/js/admin/mengelola-cuti/adminMengelolaCuti.js"></script>
</body>
</html>