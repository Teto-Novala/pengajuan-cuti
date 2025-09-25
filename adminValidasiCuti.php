<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Cuti</title>
</head>
<body>
    <!-- container start -->
    <div class="container">
        <?php include "./app/components/admin/sidebar/adminSidebar.php" ?>
        <div class="main">
            <div class="validasi-container">
                <p>Daftar Permohonan Cuti</p>
                <table class="monitoring-table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Jenis Cuti</th>
                        <th>Tanggal Cuti</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>11111111111</td>
                        <td>Test</td>
                        <td>Sakit</td>
                        <td>27 Jun 2025 s/d 28 Jun 2025</td>
                        <td>2 hari</td>
                        <td>Disetujui</td>
                        <td><img src="/public/images/doc.svg" alt="doc"></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>22222222222</td>
                        <td>Test 2</td>
                        <td>Tahunan</td>
                        <td>01 Jul 2025 s/d 05 Jul 2025</td>
                        <td>5 hari</td>
                        <td>Menunggu</td>
                        <td><img src="/public/images/doc.svg" alt="doc"></td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- container end -->

    <script src="/public/js/index.js"></script>
</body>
</html>