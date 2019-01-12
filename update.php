<?php
include "pages/header.php";
if (!$_GET['id']) {
	header('location: index.php');
}
else{
	$id = $_GET['id'];
	$a = "SELECT * FROM user WHERE id_user=$id";
	$ambil = mysqli_query($konek, $a);
	$user = mysqli_fetch_array($ambil);
}
?>

<div class="divtambah">
	<h1>Update Data</h1>
	<form method="POST" class="form-tambah">
		<div class="form-group">
			<label for="Nama">Nama :</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?=$user['nama'];?>">
		</div>
		<div class="form-group">
			<label for="Email">Email :</label>
			<input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="<?=$user['email'];?>">
		</div>
		<button type="submit" name="update" class="btn btn-success">Update</button>
	</form>
</div>

<?php
if (isset($_POST['update'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	if(mysqli_query($konek, "UPDATE user SET nama='$nama', email='$email' WHERE id_user='$id'")){
		header('location: index.php');
	}
}

include "pages/footer.php";
?>