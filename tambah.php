<?php
include "pages/header.php";
?>

<div class="divtambah">
	<h1>Tambah Data</h1>
	<form action="" method="POST" class="form-tambah">
		<div class="form-group">
			<label for="Nama">Nama :</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
		</div>
		<div class="form-group">
			<label for="Email">Email :</label>
			<input type="email" name="email" class="form-control" placeholder="Masukkan Email">
		</div>
		<button type="submit" name="tambah" class="btn btn-success">Tambah</button>
	</form>
</div>

<?php
if (isset($_POST['tambah'])) {
	# code...
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$query = "INSERT INTO user(nama, email) VALUES('$nama', '$email')";
	if(mysqli_query($konek, $query)){
		header('location: index.php');
	}
}

include "pages/footer.php";
?>