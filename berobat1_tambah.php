<?php
error_reporting(E_ALL);
include 'koneksi.php';

if (isset($_POST['submit']))
{
	$idbat = $_POST['id_berobat'];
	$idpas =  $_POST['id_pasien'];
	$iddok =  $_POST['id_dokter'];
	$date =  $_POST['tanggal_berobat'];
	$keluhan = $_POST['keluhan_pasien'];
	$diagnosa =  $_POST['hasil_diagnosa'];
	$plks =  $_POST['penatalaksanaan'];
	$sql = 'INSERT INTO berobat (id_berobat, id_pasien, id_dokter, tanggal_berobat, keluhan_pasien, keluhan_pasien, hasil_diagnosa, penatalaksanaan)';
	$sql .= "VALUE ('{$idbat}','{$idpas}', '{$iddok}', '{$date}', '{$keluhan}', '{$diagnosa}', '{$plks}')";
	$result = mysqli_query($con, $sql);
	header('location: berobat1.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<title>Tambah Berobat</title>
	<style>
	.aldi {
		background-color: 	#DEB887;
		border-radius: 5px;
		padding: 10px 23px;
		margin-bottom: 20px;
	}
	form div > label {
			display: inline-block;
			width: 100px;
			height: 30px;
	}
	form div > label {
			display: inline-block;
			width: 100px;
			height: 50px;
	}
	form input[type="text"], form textarea {
			border: 1px solid;
	}
	
	.main{
		height: 150vh;
	}
	
	.tambah-box{
		width: 800px;
		height: 1100px;
		box-sizing: border-box;
		border-radius: 10px
	}
	</style>
</head>
<body>
	<div class="main d-flex flex-column justify-content-center align-items-center">
		<div class="tambah-box p-5 shadow">
		<header class="aldi">
		<h2 align="center" class="text-white">Tambah berobat</h2>
		</header>
		<hr>
			<div class="main">
				<form method="post" action="berobat1_tambah.php" enctype="multipart/form-data">
					<div class="input mb-3">
						<label for="id_berobat" class="col-sm-2 col-form-label">ID Berobat</label>
						<input type="number" class="form-control" name="id_berobat" placeholder="Masukan ID Berobat">
					</div>
					<div class="input mb-3">
						<label for="id_pasien" class="col-sm-2 col-form-label">ID Pasien</label>
						<input type="number" class="form-control" name="id_pasien">
					</div>
					<div class="input mb-3">
						<label for="id_dokter" class="col-sm-2 col-form-label">ID Dokter</label>
						<input type="number" class="form-control" name="id_dokter">
					</div>
					<div class="input mb-3">
						<label for="tanggal_berobat" class="col-sm-2 col-form-label">Tanggal Berobat</label>
						<input type="date" class="form-control" name="tanggal_berobat">
					</div>
					<div class="input mb-3">
						<label for="keluhan_pasien" class="col-sm-2 col-form-label">Keluhan Pasien</label>
						<input type="text" class="form-control" name="keluhan_pasien">
					</div>
					<div class="input mb-3">
						<label for="hasil_diagnosa" class="col-sm-2 col-form-label">Hasil Diagnosa</label>
						<input type="text" class="form-control" name="hasil_diagnosa">
					</div>
					<div class="input mb-3">
						<label for="penetalaksanaan" class="col-sm-2 col-form-label">Penatalaksanaan</label>
						<input type="text" class="form-control" name="penatalaksanaan">
					</div>
					<div class="submit">
						<input class="btn btn-primary mt-2" type="submit" name="submit" value="Simpan Data" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>