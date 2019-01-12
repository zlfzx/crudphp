<?php
include "pages/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Belajar CRUD PHP</title>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/style.css">
	<script src="dist/js/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">BelajarCRUD</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNav">
				<ul class="nav navbar-nav">
					<li><a href="tambah.php">Tambah Data</a></li>
				</ul>
			</div>
		</div>
	</nav>