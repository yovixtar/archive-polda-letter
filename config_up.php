<?php


date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= 'localhost'; // host server
	$user 	= 'iyabosco_polda';  // username server
	$pass 	= 'ImhWu!?.1L@o'; // password server, kalau pakai xampp kosongin saja
	$dbname = 'iyabosco_polda'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
	$create = 'fungsi/tambah/tambah.php'; // direktori fungsi insert data
	$update = 'fungsi/edit/edit.php'; // direktori fungsi update data
	$delete = 'fungsi/hapus/hapus.php'; // direktori fungsi delete data

	$base_url = "/archive-polda-letter";
?>

