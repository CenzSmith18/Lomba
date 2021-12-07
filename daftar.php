<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, idkelas, password)
                    VALUES ('$username', '$email', '$kelas', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $kelas = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
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
        <link rel="stylesheet" href="css/shit.css">
        <!--responsif-->
	    <link rel="stylesheet" href="css/responsif.css">
        <title>Daftar</title>
    </head>
    <body>

        <div class="container">
            <form action="" method="POST" class="form-test">
                <p class="daftar-text">Daftar</p>
                <div class="input">
                    <input class="input-daftar" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="input">
                    <input class="input-daftar" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="input">
                    <input class="input-daftar" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input">
                    <input class="input-daftar" type="password" placeholder="Konfirmasi Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>
                <div class="input">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="info-teks">Anda Sudah Punya Akun? <a href="login.php">Login </a></p>
            </form>
    </body>
</html>