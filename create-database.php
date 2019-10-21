<?php
	include "koneksi.php"; 

	//sql query create database
	$sql = "CREATE DATABASE dbprofile"; 

	if($koneksi->query($sql) === TRUE) {
		echo "Database berhasil dibuat";
	} else {
		echo "Database gagal dibuat";
	}
?>