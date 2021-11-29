<?php
// include database connection file
include_once("config.php");
 
if (!isset($_SESSION['akses'])) {
    echo "<script>alert('Anda Bukan Admin')</script>";
    header("Location: home.php");
}

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['ID'];
    
    $pelajaran=$_POST['Pelajaran'];
    $tanggal=$_POST['Tanggal'];
    $jam=$_POST['Waktu'];
    $link=$_POST['Link'];
        
    // update user data
    $result = mysqli_query($conn, "UPDATE kelas_live SET pelajaran='$pelajaran',tanggal='$tanggal',jam='$jam',link='$link' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list

}

if(isset($_POST['Delete'])){
    $id = $_POST['id'];
    $result = mysqli_query($conn, "DELETE FROM kelas_live WHERE id=$id");
}
?>
<?php
// Display selected user data based on id
// Getting id from url

 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM kelas_live");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $pelajaran = $user_data['pelajaran'];
    $tanggal = $user_data['tanggal'];
    $jam = $user_data['jam'];
    $link = $user_data['link'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="home.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
        <span>Edit</span>
            <tr> 
                <td>ID</td>
                <td><input type="number" name="ID" value=></td>
            </tr>
            <tr> 
                <td>Pelajaran</td>
                <td><input type="text" name="Pelajaran" value=<?php echo $pelajaran;?>></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="Tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr> 
                <td>Jam</td>
                <td><input type="time" name="Waktu" value=<?php echo $jam;?>></td>
            </tr>
            <tr> 
                <td>Link</td>
                <td><input type="url" name="Link" value=<?php echo $link;?>></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
    <span>Hapus</span>
    <form action="" method="post" name="delete">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Delete" value="Delete"></td>
            </tr>
        </table>
    </form>
</body>
</html>