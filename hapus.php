<?php
include "pages/koneksi.php";
if(!isset($_GET['id'])){
	header('location: index.php');
}
else{
	$id = $_GET['id'];
	if(mysqli_query($konek, "DELETE FROM user WHERE id_user='$id'")){
		header('location: index.php');
	}
}