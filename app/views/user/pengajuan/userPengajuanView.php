<?php
include "../../../controllers/user/pengajuan/userPengajuanController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/user/pengajuan/userPengajuan.css">
</head>
<body>
    <?php require "../../../components/user/sidebar/userSidebar.php" ?>
    <main>
        <div class="container">
            <?php require "../../../components/user/sidebar-desktop/userSidebarDesktop.php" ?>
            <div class="container-main">
                <form method="post" class="form-pengajuan">
                    <h1>Form Pengajuan</h1>
                    <div class="form-list">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai">
                    </div>
                    <div class="form-list">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai">
                    </div>
                    <div class="form-list">
                        <label for="alasan">Alasan</label>
                        <textarea name="alasan" id="alasan" rows="10"></textarea>
                    </div>
                    <div class="form-btn">
                        <button name="reset" id="resetBtn">Reset</button>
                        <button type="submit" name="pengajuan">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
</body>
</html>