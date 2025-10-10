<?php
include "../../controllers/login/loginController.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/login/loginView.css">
</head>
<body>
    <main>
        <div class="title">CUTI</div>
        <form  method="post">
            <h1>Login</h1>
            <div class="form-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <?php if ($username_show): ?>
                    <p class="msg"><?php echo $msg ?></p>
                <?php endif; ?>
            <button type="submit" name="login">Login</button>
        </form>
    </main>
</body>
</html>