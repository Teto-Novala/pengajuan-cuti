<?php
include "../../../controllers/admin/laporan-cuti/adminLaporanCutiController.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Cuti</title>
  <link rel="stylesheet" href="../../../../public/css/reset.css" />
  <link rel="stylesheet" href="../../../../public/css/user/topbar/userTopbar.css">
  <link rel="stylesheet" href="../../../../public/css/admin/laporan-cuti/adminLaporanCuti.css" />
</head>
<body>
  <?php require "../../../components/admin/sidebar/adminSidebar.php" ?>
  <main>
    <div class="container">
      <?php require "../../../components/admin/sidebar-desktop/adminSidebarDesktop.php" ?>
      <div class="container-main">
        <div class="laporan">
          <h2>Laporan Cuti</h2>

          <!-- 🔍 FILTER -->
          <div class="filter-container">
            <label for="statusFilter">Filter Status:</label>
            <select id="statusFilter">
              <option value="semua">Semua</option>
              <option value="menunggu">Menunggu</option>
              <option value="ditolak">Ditolak</option>
              <option value="diterima">Diterima</option>
            </select>
          </div>

          <!-- 📋 TABEL -->
          <div class="table-wrapper" id="tableContainer">
            <?php include "../../../components/admin/laporan-cuti/table/adminLaporanCutiTable.php" ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="../../../../public/js/mobile-nav/mobileNav.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
  const select = document.getElementById("statusFilter");
  const tableContainer = document.getElementById("tableContainer");

  select.addEventListener("change", () => {
    const status = select.value;
    fetch("../../../components/admin/laporan-cuti/table/adminLaporanCutiTable.php?status=" + status)
      .then((res) => res.text())
      .then((html) => {
        tableContainer.innerHTML = html;
      })
      .catch((err) => console.error("Fetch error:", err));
  });
});
  </script>
</body>
</html>
