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
        <?php include "./app/views/layouts/admin/sidebar/adminSidebar.php" ?>
        <div class="main">
            <?php include "./app/views/layouts/admin/welcome-card/welcomeCard.php" ?>
            <div class="card-status">
                <div class="list-status">
                    <img src="/public/images/pending-list.svg" alt="pending">
                    <div class="bold">
                        <p>0 Cuti</p>
                        <p>Menunggu</p>
                    </div>
                </div>
                <div class="list-status">
                    <img src="/public/images/reject-list.svg" alt="pending">
                    <div class="bold">
                        <p>0 Cuti</p>
                        <p>Tidak Diterima</p>
                    </div>
                </div>
                <div class="list-status">
                    <img src="/public/images/approve-list.svg" alt="pending">
                    <div class="bold">
                        <p>0 Cuti</p>
                        <p>Diterima</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- container end -->

    <script src="/public/js/index.js"></script>
</body>
</html>