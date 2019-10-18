<?php
	include "koneksi.php"; 

	$sql = "CREATE DATABASE profile_db";

	if($koneksi->query($sql) === TRUE) {
		echo "Database berhasil dibuat";
	} else {
		echo "Database gagal dibuat";
	}
?>