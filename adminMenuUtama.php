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
            <?php include "./app/components/admin/welcome-card/welcomeCard.php" ?>
            <?php include "./app/components/admin/status-card/statusCard.php"?>
            <?php include "./app/components/admin/monitoring/monitoring.php"?>
        </div>
    </div>

    <!-- container end -->

    <script src="/public/js/index.js"></script>
</body>
</html>