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
            <div class="container-sidebar">
                <div class="sidebar-list">
                    <img src="../../../../public/images/beranda.svg" alt="logo">
                    <a href="../beranda/userBeranda.php">Beranda</a>
                </div>
                <div class="sidebar-list">
                    <img src="../../../../public/images/form.svg" alt="logo">
                    <a href="../pengajuan/userPengajuan.php">Form Pengajuan</a>
                </div>
                <div class="sidebar-list">
                    <img src="../../../../public/images/histori.svg" alt="logo">
                    <a href="">Histori Cuti</a>
                </div>
            </div>
            <form method="post" class="form-pengajuan">
                <h1>Form Pengajuan</h1>
                <div class="form-list">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date">
                </div>
            </form>
        </div>
    </main>
    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
</body>
</html>