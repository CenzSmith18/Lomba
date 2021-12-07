<?php
   include 'config.php';

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
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- bootstrap css -->
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/Berandastyle.css">
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
	<div class="main-class">
    	<p>PERTEMUAN KELAS</p>
    	<table class="table table-borderless">
    		<tr>
    			<td>Fungsi Kuadrat</td>
    			<td>Hari ini </td>
    			<td><li>Live Sekarang</li></td>
    			<td>
    				<button class="btn-1">Gabung</button>
    			</td>
    		</tr>

    		<tr>
    			<td>Persiapan PAS</td>
    			<td>01 Des 2021</td>
    			<td>10 AM - 12 PM</td>
    			<td>
    				<button class="btn-2">Waiting</button>
    			</td>
    		</tr>
    		<tr><td></td><td></td><td></td><td></td></tr>
    	</table>
    	<nav>
    		<p>DAFTAR TUGAS
    			<button class="btn-3">
    				<a href="tugas.php"><img src="asset/icon.png">Lihat lainnya</a>
    			</button>
    		</p>
    	</nav>
        <div class="asg-1">
    		<img src="asset/grafik.jpg" alt="Fungsi kuadrat">
    		<p>Fungsi Kuadrat</p>
    		<p style="color: #33cc33; margin-bottom: 40px; margin-top: 0px;">Tenggat: Rabu, 02 Nov</p>
    		<p>Rumus ABC dan Melengkapkan Bentuk Kuadrat Sempurna</p>
	    </div>
	    <div class="asg-2">
	    <img src="asset/Matriks.jpg" alt="Matriks">
	    	<p>MATRIKS</p>
	    	<p style="color: #33cc33; margin-bottom: 40px; margin-top: 0px;">Tenggat: Tak terbatas</p>
	    	<p>Praesent id soilicitudin diam, mattis dictum enim</p>
	    </div>
    	<p>E-BOOK</p>
    	<div class="book">
    		<img src="asset/mtk.jpg" style="height: 290px;">
    		<img src="asset/mtk2.jpg" style="height: 290px;">
    		<img src="asset/juara.jpg" style="height: 290px;">
    		<img src="asset/soal.jpg" style="height: 290px;">
    	</div>
    </div>
</div>	
    <footer></footer>
</body>