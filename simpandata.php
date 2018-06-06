<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container-fluid">
		<?php
		$server = "localhost";
		$username = "id6084935_uaswebpro";
		$password = "mitra31";
		$db = "id6084935_uaswebpro";

		$koneksi = new mysqli($server, $username, $password, $db);
		if($koneksi->connect_error) {
			echo "gagal koneksi : " . $koneksi->connect_error;
		}

		$nim 	= $_POST['nim'];
		$nama   = $_POST['nama'];
		$jenis_kelamin   = $_POST['jk'];
		$jurusan = $_POST['jurusan'];
		$semester   = $_POST['semester'];
		$alamat = $_POST['alamat'];
		
		if($nim=='' || $nama=='' || $jenis_kelamin=='' || $jurusan=='' || $semester=='' || $alamat==''){
			echo " isi form dengan lengkap<br>";
			echo '<a href="input.php"><button type="button" class="btn btn-info">Kembali</button></a>';
			return;
		}

		$query = "insert into uas_mahasiswa values('$nim','$nama','$jenis_kelamin','$jurusan','$semester','$alamat')";

		//echo "<br>".$query;
		if($koneksi->query($query) === true) {
			echo "<br> Data ". $_POST["nama"]. " berhasil disimpan ".
			'<a href="index.php"><button type="button" class="btn btn-info">Lihat Data</button></a>';
		}else{
			$koneksi->error;
			echo "<br>Data gagal disimpan " .
			'<a href="index.php"><button type="button" class="btn btn-info">Lihat Data</button></a>';
		}

		$koneksi->close();
		?>
	</div>
</body>
</html>