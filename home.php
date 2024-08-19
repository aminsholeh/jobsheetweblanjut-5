<?php
    session_start();
    $username = $_GET['userName'];
    $_SESSION['namauser'] = $username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Home</title>
</head>
<body>
     <?php 
     echo "<h2>Selamat datang, ".$_SESSION['namauser'] ."!</h2>"; 
     ?>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>