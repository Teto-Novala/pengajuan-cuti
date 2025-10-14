<header>
        <nav>
            <div>CUTI</div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img class="profil" src="../../../../public/images/profil.svg" alt="profil">
        </nav>
        <div class="mobile">
            <div class="overlay"></div>
            <div class="nav">
                <div class="nav-list">
                    <img src="../../../../public/images/beranda.svg" alt="logo">
                    <a href="../beranda/adminBerandaView.php">Beranda</a>
                </div>
                <div class="nav-list">
                    <img src="../../../../public/images/form.svg" alt="logo">
                    <a href="../mengelola-cuti/adminMengelolaCutiView.php">Mengelola Cuti</a>
                </div>
                <div class="nav-list">
                    <img src="../../../../public/images/histori.svg" alt="logo">
                    <a href="../laporan-cuti/adminLaporanCutiView.php">Laporan Cuti</a>
                </div>
                <div class="nav-list profil-mobile">
                    <img src="../../../../public/images/profil.svg" alt="logo">
                    <a href="../profil/userProfilView.php">Profil</a>
                </div>
                <form action="../../../controllers/logout/logoutController.php" method="post" class="nav-list logout">
                    <img src="../../../../public/images/logout.svg" alt="logo">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
        <div class="profil-list">
            <a href="../profil/adminProfilView.php">Profil</a>
            <form action="../../../controllers/logout/logoutController.php" method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>
    </header>