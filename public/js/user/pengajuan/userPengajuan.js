const resetBtn = document.getElementById("resetBtn");
const form = document.querySelector(".form-pengajuan");

resetBtn.addEventListener("click", () => {
  form.reset(); // otomatis kosongkan semua input dan textarea
});
