<?php
   include 'config.php';

    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    ?>
    
 
 <html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/Berandastyle.css">
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
			<?php echo "<p>" . $_SESSION['username'] . "</p>"; ?>
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
	<div class="main-class">
    	<p>PERTEMUAN KELAS</p>
		<?php 
						$username = $_SESSION['username'];
						$sql = "SELECT * FROM users WHERE username='$username'";
						$result = mysqli_query($conn, $sql);
						if ($result->num_rows > 0) {
							$row = mysqli_fetch_assoc($result);
								if ($row['akses']=="guru"){
									$_SESSION['username'] = $row['username'];
									$_SESSION['akses'] = "guru";
									echo "<a href='edit.php'><button class='btn-1'>Edit</button></a>";
									echo "<a href='add.php'><button class='btn-1'>Tambah</button></a><br><br>";
								}
						}
					?>
    	<table border='1'>
    		<tr>
			<?php 
			echo "

			<th>Id</th>
			
			<th>Pelajaran</th>
			
			<th>Tanggal</th>
			
			<th>Jam</th>
			
			<th>Link</th>
			
			";
						$sql = "SELECT * FROM kelas_live";
						$result = mysqli_query($conn, $sql);
						if ($result->num_rows > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								echo "<tr></tr>";
							echo "<td>".$row['id']."</td>";
							echo "<td>".$row['pelajaran']."</td>";
							echo "<td>".$row['tanggal']."</td>";
							echo "<td>".$row['jam']."</td>";
							echo "<td><a href=".$row['link'].">Join</a></td>";
							
							}
						}
					?>
    			
    		</tr>
    	
    		<tr>
				
    			
    		
    	</table>
    	<nav>
    		<p>DAFTAR TUGAS
    			<button class="btn-3">
    				<a href="#"><img src="asset/icon.png">Lihat lainnya</a>
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
    <footer></footer>
</body>
</html>