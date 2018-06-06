<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<?php
		include "koneksi.php";

		$koneksiObj = new koneksi();
		$koneksi = $koneksiObj->getKoneksi();

		if($koneksi->connect_error) {
			echo "gagal koneksi : ".$koneksi->connect_error;
		}else {
			echo "proses menghapus data berhasil";
		}

		$qry = "delete from uas_mahasiswa where nim=" . $_GET["nim"];

		if($koneksi->query($qry) === true) {
			echo "<br> data ". $_GET["nim"]. " berhasil dihapus ".
			'<a href="main.php"><button type="button" class="btn btn-info">Lihat Data</button></a>';
		}else {
			echo "<br>data gagal dihapus ".
			'<a href="main.php"><button type="button" class="btn btn-info">Lihat Data</button></a>';
		}

		$koneksi->close();
		?>
	</div>
</body>
</html>
