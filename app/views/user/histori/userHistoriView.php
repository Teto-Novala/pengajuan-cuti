<?php
include "../../../controllers/user/histori/userHistoriController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
    <link rel="stylesheet" href="../../../../public/css/user/histori/userHistori.css">
</head>
<body>
    <?php require "../../../components/user/sidebar/userSidebar.php" ?>
    <main>
        <div class="container">
            <?php require "../../../components/user/sidebar-desktop/userSidebarDesktop.php" ?>
            <div class="container-main">
                <div class="histori">
                    <h1>Histori</h1>
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
                                if ($result && $result->num_rows > 0) {
                                    $no = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $statusClass = strtolower($row['status']); // buat class css sesuai status
                                        echo "<tr class='tr-head'>
                                                <td>{$no}</td>
                                                <td>{$row['tanggal_mulai']}</td>
                                                <td>{$row['tanggal_selesai']}</td>
                                                <td>{$row['alasan']}</td>
                                                <td><span class='status {$statusClass}'>" . ucfirst($row['status']) . "</span></td>
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