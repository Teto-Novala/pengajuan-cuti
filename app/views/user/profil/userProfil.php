<?php
include "../../../controllers/user/profil/userProfilController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/user/profil/userProfil.css">
</head>
<body>
    <?php require "../../../components/user/sidebar/userSidebar.php" ?>
    <main>
        <div class="container">
            <h1>Profil</h1>
            <div class="container-fields">
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
    </main>
    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
</body>
</html>