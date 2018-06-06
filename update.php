<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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