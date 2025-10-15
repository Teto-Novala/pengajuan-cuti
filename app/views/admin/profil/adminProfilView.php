<?php
include "../../../controllers/admin/profil/adminProfilController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/admin/profil/adminProfil.css">
</head>
<body>
    <?php require "../../../components/admin/sidebar/adminSidebar.php" ?>
    <main>
        <div class="container">
            <?php require "../../../components/admin/sidebar-desktop/adminSidebarDesktop.php" ?>
            <div class="container-main">
                <div class="container-fields">
                    <h1>Profil</h1>
                    <div class="profil-field">
                        <label for="Username">Username</label>
                        <input type="text" value="<?= htmlspecialchars($data['username'])?>" disabled>
                    </div>
                    <div class="profil-field">
                        <label for="Username">Nama Lengkap</label>
                        <input type="text" value="<?= htmlspecialchars($data['nama_lengkap'])?>" disabled>
                    </div>
                    <div class="profil-field">
                        <label for="Username">No HP</label>
                        <input type="text" value="<?= htmlspecialchars($data['no_hp'])?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
</body>
</html>