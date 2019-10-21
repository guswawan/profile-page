<?php
	$host = "localhost"; //host database
	$username = "root"; //username database
	$password = ""; //password database
	$db = "dbprofile"; //database

	$koneksi = new mysqli($host, $username, $password, $db); //membuat koneksi ke server mysql

	if($koneksi->connect_error) { //cek koneksi
		die("Koneksi ke database gagal");
	} 
	// else {
	// 	echo "Koneksi ke database berhasil";
	// }
?>