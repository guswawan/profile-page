<?php
	include "koneksi.php";

	$sql = "SELECT * FROM user";
	$result = $koneksi->query($sql);

	foreach ($result as $result) {
		# code...
		$id = $result["id"];
		$name = $result["name"];
		$role = $result["role"];
		$available = $result["availability"];
		$age = $result["age"];
		$location = $result["location"];
		$experience = $result["years_experience"];
		$email = $result["email"];
	}
?>