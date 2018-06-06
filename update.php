<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php
			require_once('koneksi.php');

			$koneksiObj = new Koneksi();
			$koneksi = $koneksiObj->getKoneksi();

			if($koneksi->connect_error){
				echo "Gagal Koneksi : ". $koneksi->connect_error;
		} 

		$nim 	= $_POST['nim'];
		$nama   = $_POST['nama'];
		$jenis_kelamin   = $_POST['jk'];
		$jurusan = $_POST['jurusan'];
		$semester   = $_POST['semester'];
		$alamat = $_POST['alamat'];

		$query = "update uas_mahasiswa set nama = '$nama', jenis_kelamin = '$jenis_kelamin', jurusan = '$jurusan', semester = '$semester', alamat = '$alamat' where nim = '$nim'";
		echo $query;
		
		if($nim=='' || $nama=='' || $jenis_kelamin=='' || $jurusan=='' || $semester=='' || $alamat==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="main.php"><button type="button" class="btn btn-info">Kembali</button></a>';
        return;
    }
		
		if($koneksi->query($query) === true) {
			echo "<br> Data ". $_POST["nama"]. " berhasil Diubah ". 
			'<a href="main.php"><button type="button" class="btn btn-info">Lihat Data</button></a>';
		}else{
			$koneksi->error;
			echo "<br>Data gagal disimpan" ;
		}

		$koneksi->close();
		?>

	</div>
</body>
</html>