<?php 
 
 include 'config.php';
 
error_reporting(0);
 
session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
}
$_SESSION['akses'];
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
            if ($row['akses']=="guru"){
                $_SESSION['username'] = $row['username'];
                $_SESSION['akses'] = "guru";
                header("Location: home.php");
            } else {
                $_SESSION['username'] = $row['username'];
                $_SESSION['akses'] = "murid";
                header("Location: home.php");
            }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
        <!--responsif-->
	    <link rel="stylesheet" href="css/responsif.css">

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="form-test">
                <p class ="login-text">Login</p>
                <div class="input">
                    <input class="input-login" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="input">
                    <input class="input-login" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input">
                    <button name="submit" class="btn">Login</button>
                </div>
                <p class="info-teks">Anda Belum Punya Akun? <a href="daftar.php">Register</a></p>
            </form>
        </div>
    </body>
</html>