<?php
	include "koneksi.php";

	if(isset($_POST['submit'])) { //validasi set variable di form
		$id = $_POST['id_user'];
		$name = $_POST['name'];
		$role = $_POST['role'];
		$available = $_POST['availability'];
		$age = $_POST['age'];
		$location = $_POST['location'];
		$experience = $_POST['years'];
		$email = $_POST['email'];


		//query sql
		$sql = "UPDATE user SET name = '$name', role = '$role', availability = '$available', age = '$age', years_experience = '$experience', email = '$email' WHERE id = '$id'"; 

		if($koneksi->query($sql) == TRUE) { //variabel koneksi cek dengan query variabel  sql
			// This is in the PHP file and sends a Javascript alert to the client
			$message = "Update data berhasil";
			echo "<script type='text/javascript'>alert('$message');</script>";
			// echo "Update data berhasil.";
		} else {
			echo "Update data gagal";
		}
	}
?>