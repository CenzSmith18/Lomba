<?php




session_start();
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
$akses = $_SESSION['akses'];


    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALAMAN TUGAS</title>
	 <!-- bootstrap css -->
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/tugasstyle.css">
	<link rel="stylesheet" href="css/navbar.css">
	<!--responsif-->
	<link rel="stylesheet" href="css/responsif.css">
	
</head>
<body>
<header>
	    <nav class="navbar">
        	<a class="toggler-navbar">
            	<div class="hamburger-menu">
                	<span></span>
                	<span></span>
               		<span></span>
            	</div>
        	</a>
        	<a class="logo" href="">
        		<img src="asset/pngegg.png" alt="Pelajar" style="width: 30px; float: left; margin-right: 5px;">LOREGRAM
        	</a>
        	<select>
	        	<option value="Mapel">---Mata Pelajaran---</option>
				<option value="Matematika">Matematika</option>
				<option value="B. Indonesia">B. Indonesia</option>
				<option value="PPKN">PPKN</option>
				<option value="PAI">Pendidikan Agama Islam</option>
				<option value="IPA">IPA</option>
				<option value="IPS">IPS</option>
				<option value="PJOK">Penjasorkes</option>
			</select>
    	</nav>
	    <div class="sidebar">
		<img src="asset/Profile.png">
			<?php
			echo "<p>". $_SESSION['username'] . "</p>";
			echo strtoupper("<p>" . $akses . "</p>");
			?>
	        <ul>
	          	<li class="active"><a href="#">Jadwal Pelajaran</a></li>
	            <li class="active"><a href="#">Room Virtual Class</a></li>
	            <li class="active"><a href="#">Forum Kelas</a></li>
	            <li class="active"><a href="#">LOREQUIZZ</a></li>
	            <li class="active"><a href="#">Chat</a></li>
	        	<li class="active"><a href="logout.php">Logout</a></li>
			</ul>
	    </div>
	    <script src="js/sidebar.js"></script>
	</header>
<div class="container">
	<div class="title">
		<p>TUGAS: Kedudukan Grafik</p>
		<a class="deadline">Tenggat: Rabu, 02 Nov</a>
		<hr>
	</div>
	<div class="main">
		<img src="asset/grafik2.jpg">
		<p>Kedudukan grafik fungsi kuadrat (parabola)</p>
		<p>1. Berdasarkan tanda dari nilai a</p>
		<p>a. Jika a > 0 maka kurva terbuka ke atas</p>
		<p>b. Jika a < 0 maka kurva terbuka ke bawah</p>
		<p>Berdasarkan tanda dari nilai D</p>
		<p class="formula">Rumus D = b^2 - 4ac</p>
		<br>
		<p>a. Jika D > 0 maka grafik fungsi kuadrat memotong sumbu X di dua titik berlainan</p>
		<p>b. Jika D = 0 maka grafik fungsi kuadrat menyinggung sumbu X</p>
		<p>c. Jika D < 0 maka grafik fungsi kuadrat tidak menyinggung/memotong sumbu X</p>
	</div>
	<div class="exercise">
		<p class="title-0">SOAL :</p>
		<p>Gambarlah grafik fungsi dari persamaan y = x^2 - 6x -16</p>
	</div>
	<div class="coment">
		<p>Komentar Kelas :</p>
		<img src="asset/profile.png">
			<p>Cecep Balon</p>
			<p>Saya kurang mengerti untuk bagian rumus ABC</p>
	</div>
	<div class="asgn">
		<div class="upld">
			<img src="asset/upload.png">
			<p>Upload Tugas</p>
		</div>
		<div class="sub">
			<button class="sub-1">SUBMIT</button>
		</div>
</div>
</body>
</html>