<?php include('server.php');?> <!-- ທຳການເຊື່ອມຕໍ່ກັບ DB ມາທີໜ້ານີ້ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <!-- Style -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a member ? <a href="register.php">Sign up</a></p>
    </form>
</body>
</html>