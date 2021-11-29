<html>
<head>
    <title>PERTEMUAN KELAS</title>
</head>
 
<body>
    <a href="home.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Pelajaran</td>
                <td><input type="text" name="pelajaran"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td>Jam</td>
                <td><input type="time" name="jam"></td>
            </tr>
            <tr> 
                <td>Link</td>
                <td><input type="text" name="link"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
                <td><input type="submit" name="Delete" value="Delete"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $pelajaran = $_POST['pelajaran'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $link = $_POST['link'];
        
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO kelas_live(pelajaran,tanggal,jam,link) VALUES('$pelajaran','$tanggal','$jam','$link')");
        
        // Show message when user added
        echo "User added successfully. <a href='home.php'>View Users</a>";
    }
    ?>
</body>
</html>