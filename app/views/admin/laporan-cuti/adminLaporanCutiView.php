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
            <label for="statusFilter">Status:</label>
            <select id="statusFilter">
              <option value="semua">Semua</option>
              <option value="menunggu">Menunggu</option>
              <option value="ditolak">Ditolak</option>
              <option value="diterima">Diterima</option>
            </select>

            <label for="tanggalMulai">Mulai:</label>
            <input type="date" id="tanggalMulai">

            <label for="tanggalSelesai">Selesai:</label>
            <input type="date" id="tanggalSelesai">

            <label for="namaFilter">Nama:</label>
            <input type="text" id="namaFilter" placeholder="Cari nama...">

            <button id="resetFilter">Reset</button>
            <div style="margin-bottom: 15px;">
    <a href="../../../controllers/admin/laporan-cuti/exportPdf.php" 
       target="_blank" 
       class="btn-export"
       style="background-color:#3b82f6;color:#fff;padding:8px 12px;border-radius:5px;text-decoration:none;">
      📄 Export PDF
    </a>
  </div>
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
    const statusSelect = document.getElementById("statusFilter");
    const tanggalMulai = document.getElementById("tanggalMulai");
    const tanggalSelesai = document.getElementById("tanggalSelesai");
    const namaInput = document.getElementById("namaFilter");
    const resetButton = document.getElementById("resetFilter");
    const tableContainer = document.getElementById("tableContainer");

    function fetchFilteredData() {
      const status = statusSelect.value;
      const mulai = tanggalMulai.value;
      const selesai = tanggalSelesai.value;
      const nama = namaInput.value;

      const params = new URLSearchParams({ status, mulai, selesai, nama });

      fetch(`../../../components/admin/laporan-cuti/table/adminLaporanCutiTable.php?${params.toString()}`)
        .then(res => res.text())
        .then(html => {
          tableContainer.innerHTML = html;
        })
        .catch(err => console.error("Fetch error:", err));
    }

    // Jalankan fetch setiap kali filter berubah
    [statusSelect, tanggalMulai, tanggalSelesai].forEach(el => {
      el.addEventListener("change", fetchFilteredData);
    });
    namaInput.addEventListener("keyup", fetchFilteredData);

    // Tombol reset filter
    resetButton.addEventListener("click", () => {
      statusSelect.value = "semua";
      tanggalMulai.value = "";
      tanggalSelesai.value = "";
      namaInput.value = "";
      fetchFilteredData();
    });
  </script>
</body>
</html>
