<html !DOCTYPE>
<head>
	<title>Input Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<br>
<style>
div {height:70px;padding:16px;width:100%;}
</style>
<div style="background-color:cyan">
<h2>Form Tambah Data Mahasiswa</h2>
</div>
	<hr>
    <div class="panel-body">
		<form action = "simpandata.php" method="post">
			<div class="form-group row">
				<label for="nim" class="col-sm-2 control-label">NIM</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nim" placeholder="nim">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nama" placeholder="nama">
				</div>
			</div>
			
			<div class="form-group row">
			  <label for="jenis_kelamin" class="col-sm-2 control-label">JENIS KELAMIN</label>
			  <div class="col-sm-4">
				  <select class="form-control" name="jk">
					<option selected>Jenis Kelamin</option>
					<option value="laki-laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				  </select>
			  </div>
			</div>
			
			<div class="form-group row">
			  <label for="jurusan" class="col-sm-2 control-label">JURUSAN</label>
			  <div class="col-sm-4">
				  <select class="form-control" name="jurusan">
					<option selected>Pilih Jurusan</option>
					<option value="D4 Teknik Informatika">D4 Informatika</option>
					<option value="D3 Kebidanan">D3 Kebidanan</option>
					<option value="D3 Farmasi">D3 Farmasi</option>
					<option value="D3 Mesin">D3 Mesin</option>
					<option value="D3 Akuntansi">D3 Akutansi</option>
					<option value="D3 Komputer">D3 Komputer</option>
				  </select>
			  </div>
			</div>
			
			<div class="form-group row">
			  <label for="semester" class="col-sm-2 control-label">SEMESTER</label>
			  <div class="col-sm-4">
				  <select class="form-control" name="semester">
					<option selected>Semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				  </select>
			  </div>
			</div>
			
			<div class="form-group row">
				<label for="alamat" class="col-sm-2 control-label">ALAMAT</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="alamat" placeholder="alamat">
				</div>
			</div>			
			<input class="btn btn-primary" type="submit" value="Submit">
			<input class="btn btn-danger" type="reset" value="Reset">
		</form>
	</div>
</div>
</body>
</html>