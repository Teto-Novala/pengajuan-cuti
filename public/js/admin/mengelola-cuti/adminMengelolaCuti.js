document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".mengelola-status button");
  const tabelContainer = document.getElementById("tabel-cuti");

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const status = btn.getAttribute("data-status");

      // Hapus semua kelas aktif
      buttons.forEach((b) => {
        b.classList.remove(
          "active-menunggu",
          "active-ditolak",
          "active-diterima"
        );
      });

      // Tambahkan kelas aktif pada tombol yang diklik
      btn.classList.add(`active-${status}`);

      // Muat tabel baru tanpa reload halaman
      fetch(
        `../../../components/admin/mengelola-cuti/table/adminMengelolaTabel.php?status=${status}`
      )
        .then((res) => res.text())
        .then((html) => {
          tabelContainer.innerHTML = html;
        })
        .catch((err) => console.error("Gagal memuat data:", err));
    });
  });

  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-aksi")) {
      const id = e.target.getAttribute("data-id");
      const status = e.target.getAttribute("data-status");

      if (!confirm(`Ubah status cuti menjadi ${status}?`)) return;

      fetch(
        "../../../controllers/admin/mengelola-cuti/updateStatusCutiController.php",
        {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: `id=${id}&status=${status}`,
        }
      )
        .then((res) => res.json())
        .then((data) => {
          alert(data.message);
          if (data.success) {
            // setelah update, refresh tabel menunggu
            const activeBtn = document.querySelector(".active-menunggu");
            if (activeBtn) activeBtn.click();
          }
        })
        .catch((err) => console.error("Gagal:", err));
    }
  });
});
