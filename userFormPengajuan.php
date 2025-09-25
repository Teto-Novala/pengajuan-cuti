<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Cuti</title>
</head>
<body>
    <!-- container start -->
    <div class="container">
        <?php include "./app/components/user/sidebar/userSidebar.php" ?>
        <div class="main">
            <div class="form-container">
                <p>Form Pengajuan</p>
                <form >
                    <div class="form-list">
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" disabled>
                    </div>
                    <div class="form-list">
                        <label for="jenis-cuti">Jenis Cuti</label>
                        <select name="jenis-cuti" id="jenis-cuti">
                            <option value="a">a</option>
                            <option value="a">b</option>
                            <option value="a">c</option>
                        </select>
                    </div>
                    <div class="form-date-container">
                        <div class="form-list tanggal">
                            <label for="tanggal-mulai">Tanggal Mulai</label>
                            <input type="date" id="tanggal-mulai" >
                        </div>
                        <div class="form-list tanggal">
                            <label for="tanggal-berakhir">Tanggal Berakhir</label>
                            <input type="date" id="tanggal-berakhir" >
                        </div>
                    </div>
                    <div class="form-list">
                        <label for="keterangan-cuti">Keterangan Cuti</label>
                        <textarea name="keterangan-cuti" id="keterangan-cuti" rows="4"></textarea>
                    </div>
                    <div  class="form-container-btn">
                        <button type="submit">
                            <img src="/public/images/done.svg" alt="done">
                            Simpan
                        </button>
                        <button type="button">
                            <img src="/public/images/cancel.svg" alt="cancel">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- container end -->

    <script src="/public/js/index.js"></script>
</body>
</html>