<html !DOCTYPE>
<head>
	<title>Input Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
					<input class="form-control" type="text" name="nim" placeholder="nim" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nama" placeholder="nama" required>
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
					<input class="form-control" type="text" name="alamat" placeholder="alamat" required>
				</div>
			</div>			
			<input class="btn btn-primary" type="submit" value="Submit">
			<input class="btn btn-danger" type="reset" value="Reset">
		</form>
	</div>
</div>
</body>
</html>