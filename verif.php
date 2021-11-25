<?php

    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shit.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-aweasome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Login</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="asset/logo.png" alt="" style="  width: 80px;">
                <div class="nama-logo">
                </div> 
            </div>
        </header>
        <div class="container-logout">
            <form action="" method="POST" class="login-email">
                <?php echo "<h1>Selamat Datang," . $_SESSION['username'] ."!". "</h1>"; ?>
                <div class="input-group">
                    <a href="logout.php" class="btn">Logout</a>
                </div>
            </form>
        </div>
    </body>
</html>