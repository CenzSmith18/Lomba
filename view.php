<?php 
 
 include 'config.php';
 session_start();
 if (!isset($_SESSION['username'])) {
     header("Location: login.php");
 }



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/Berandastyle.css">
    </head>
    <body>
        <?php 
		    $username = $_SESSION['username'];
			$sql = "SELECT * FROM uploads";
			$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<img src=".$row['dir']." width='200' height='200'>";
                    echo "<a href='edit.php'>Delete</a>";
				}
			}
		?>
    </body>
</html>
