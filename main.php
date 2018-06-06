<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>         
  <div class="row">
        <div class="container">
		<br>
<style>
div {height:80px;padding:20px;width:100%;}
</style>
<div style="background-color:gold">
<h2><i class="fa fa-users"></i> Aplikasi Data Mahasiswa</h2>
</div>  
<hr>
            <a href="input.php" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
            <br><br>
            <table class="table table-striped table-bordered table-hover" id="tb-mahasiswa">            
            
    <thead>
	<table border="1">
      <tr>
        <th>NIM</th>
        <th>NAMA</th>
		<th>JENIS KELAMIN</th>
        <th>JURUSAN</th>
		<th>SEMESTER</th>
        <th>ALAMAT</th>
		<th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
		<?php
		include "koneksi.php";

		$koneksiObj = new Koneksi();
		$koneksi = $koneksiObj->getKoneksi();

		if($koneksi->connect_error) {
			echo "<tr><td>";
			echo "Gagal koneksi : ". $koneksi->connect_error;
			echo "</td></tr>";
		}

		$query = "select * from uas_mahasiswa order by nama";
		$data = $koneksi->query($query);
		
		
		if($data->num_rows <= 0) {
			echo "<tr><td colspan='7'>";
			echo "<p align='center'>Tidak ada data</p>";
			echo "</td></tr>";
		}else {
			while ($row = $data->fetch_assoc()) {
				echo "<tr>";
				echo "<td class='center'>" . $row["nim"]. "</td>"; 
				echo "<td class='center'>" . $row["nama"]. "</td>";
				echo "<td>" . $row["jenis_kelamin"]. "</td>";
				echo "<td  class='center'>" . $row["jurusan"] . "</td>";
				echo "<td>" . $row["semester"]. "</td>";
				echo "<td>" . $row["alamat"] . "</td>";
				echo '<td><a href="form-edit.php?nim='. $row["nim"] .'"><button type="button" class="btn btn-warning">Edit</button></a> 
				<a href="hapus.php?nim='. $row["nim"] .'"><button type="button" class="btn btn-danger">Hapus</button></a></td>';
				echo "</tr>";
			}
		}
		
		$koneksi->close();
			?>
    </table>
	</div>
    </div>
</body>
</html>