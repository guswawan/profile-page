<?php
	include "koneksi.php";

	//sql query create table
	$sql = "CREATE TABLE user(
		id int PRIMARY KEY,
		name varchar(30),
		role varchar(30),
		availability varchar(30),
		age int,
		location varchar(30),
		years_experience varchar(30),
		email varchar(30)
	)";

	if($koneksi->query($sql) == TRUE) {
		echo "Tabel berhasil dibuat";
	} else {
		echo "Tabel gagal dibuat";
	}
?>