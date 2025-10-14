<?php
include "../../../controllers/admin/beranda/adminBerandaController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/admin/beranda/adminBeranda.css">
</head>
<body>
    <?php require "../../../components/admin/sidebar/adminSidebar.php" ?>
    <main>
        <div class="container">
            <?php require "../../../components/admin/sidebar-desktop/adminSidebarDesktop.php" ?>
            <div class="container-main">
                <?php require "../../../components/welcome/welcome.php" ?>
                <?php require "../../../components/admin/beranda/status/adminBerandaStatus.php" ?>
                <div class="cuti">
                    <h1>Permohonan Cuti terbaru</h1>
                    <div class="container-table">
                        <table>
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Alasan</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                if ($result_histori && $result_histori->num_rows > 0) {
                                    $no = 1;
                                    while ($row_histori = $result_histori->fetch_assoc()) {
                                        $statusClass = strtolower($row_histori['status']); // buat class css sesuai status
                                        echo "<tr class='tr-head'>
                                                <td>{$no}</td>
                                                <td>{$row_histori['tanggal_mulai']}</td>
                                                <td>{$row_histori['tanggal_selesai']}</td>
                                                <td>{$row_histori['alasan']}</td>
                                                <td><span class='status_cuti {$statusClass}'>" . ucfirst($row_histori['status']) . "</span></td>
                                              </tr>";
                                        $no++;
                                    }
                                } else {
                                    echo "<tr><td colspan='5' style='text-align:center;'>Belum ada data cuti</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
</body>
</html>