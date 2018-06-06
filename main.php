<!DOCTYPE html>
<head>
	<title> Data Mahasiswa </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <tr>
        <th class="text-center">NIM</th>
        <th class="text-center">NAMA</th>
		<th class="text-center">JENIS KELAMIN</th>
        <th class="text-center">JURUSAN</th>
		<th class="text-center">SEMESTER</th>
        <th class="text-center">ALAMAT</th>
		<th class="text-center">PILIHAN</th>
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