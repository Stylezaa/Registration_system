<!--  //include('server.php');?> ທຳການເຊື່ອມຕໍ່ກັບ DB ມາທີໜ້ານີ້ -->
<?php

session_start();

if (!isset($_SESSION['username'])) { //ເງື່ອນໄຂຖ້າຫາກບໍ່ໄດ້ມີການ Login ເຂົ້າມາຈະ Redirec ໄປໜ້າ login.php
    $_SESSION['msg'] = " You must log in first ";
    header('location: login.php');
}

if(isset($_GET['Logout'])) { //ຖ້າມີການກົດປຸ່ມນີ້ຈະເປັນການລ້າງ Session ໄປເລີຍ ແລ້ວປ່ຽນໄປໜ້າ login.php ແທນ
    seession_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <!-- Style -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="header">
        <h2>Home page</h2>
    </div>

    <div class="content">
        <!-- Logged in user information  -->
        <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1' " style=" color: red; " >Logout</a></p>
        <?php endif ?>
    </div>
</body>
</html>