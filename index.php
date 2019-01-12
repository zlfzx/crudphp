<?php
include "pages/header.php";

$query = "SELECT * FROM user";
$ambil = mysqli_query($konek, $query);
$no = 1;
?>
	
	<div class="container main">
		<table class="table table-striped">
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>#</th>
			</tr>
			<?php while ($data = mysqli_fetch_array($ambil)) { ?>
			<tr>
				<td><?=$no;?>.</td>
				<td><?=$data['nama'];?></td>
				<td><?=$data['email'];?></td>
				<td>
					<a href="update.php?id=<?=$data['id_user'];?>" class="btn btn-sm btn-warning">Edit</a>
					<a href="hapus.php?id=<?=$data['id_user'];?>" class="btn btn-sm btn-danger">Hapus</a>
				</td>
			</tr>
		<?php 
		$no++;
		} ?>
		</table>
	</div>
	
<?php
include "pages/footer.php";
?>