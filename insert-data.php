<?php
	include "koneksi.php";

	$sql = "INSERT INTO user
	(
		id, name, role, availability, age, location, years_experience, email, pp
	) VALUE
	(
		'1',
		'Gus Wawan',
		'Back End Engineer',
		'Full Time',
		'12',
		'DI Yogyakarta',
		'3',
		'grindmatrik@gmail.com',
		'null'

	)"; //memasukkan data ke tabel user

	if($koneksi->query($sql) == TRUE) {
		echo "Insert data berhasil";
	} else {
		echo "Insert data gagal.";
	}

?>
