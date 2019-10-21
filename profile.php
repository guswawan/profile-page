<!DOCTYPE html>
<?php
	include "show-data.php";
	include "update-data.php";
?>

<html>
<head>
	<title>Profil Saya</title>

	<!-- //untuk responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- //link ke file css -->
	<link rel="stylesheet" type="text/css" href="assets/css/StyleSheet.css">
</head>
<body>

	<!-- //navbar -->
	<nav>	
		<div class="menu-mobile"> <!-- untuk navbar mobile -->
			 <a href="#">Menu</a>
		</div>
		<ul>
			<li><a href="https://google.com">HOME</a></li>
			<li><a href="#">PRODUCT </a></li>
			<li><a href="#">GALLERY</a></li>
			<li><a href="#">NEWS</a></li>
			<li><a href="#">MY INVENTORY</a></li>
		</ul>
	</nav>

	<!-- //box profile -->
	<section id="box-profile">
		<div class="img-profile">
			<div class="photo" style="background-image: url(assets/images/profile.jpg);"></div>
			<!-- <img src="assets/images/profile.jpg" alt="Foto Profil"> -->
		</div>
		<div class="description">
			<h1 id="viName"><?php echo $name; ?></h1>
			<p id="viRole"><?php echo $role; ?></p>
			<a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
			<a href="#" class="button border-blue">Resume</a>
		</div> 
		<div class="personal-information">
			<div class="data">
				<p class="field">Availability</p>
				<p id="viAvailable" class="text-grey"><?php echo $available; ?></p>
			</div>
			<div class="data">
				<p class="field">Age</p>
				<p id="viAge" class="text-grey"><?php echo $age; ?></p>
			</div>
			<div class="data">
				<p class="field">Location</p>
				<p id="viLocation" class="text-grey"><?php echo $location; ?></p>
			</div>
			<div class="data">
				<p class="field">Years Experience</p>
				<p id="viYears" class="text-grey"><?php echo $experience; ?></p>
			</div>
			<div class="data">
				<p class="field">Email</p>
				<p id="viEmail" class="text-grey"><?php echo $email; ?></p>
			</div>
		</div>
	</section>

	<!-- //box-input form -->
	<section id="input-form">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label>
				<h1>Edit Your Profile</h1>
			</label>
			<div class="form">
				<label>ID User</label>
				<input id="inIdUser" type="text" name="id_user" value="<?php echo $id; ?>" readonly="readonly">
			</div>
			<div class="form">
				<label>Nama</label>
				<input id="inName" type="text" name="name">
			</div>
			<div class="form">
				<label>Role</label>
				<input id="inRole" type="text" name="role">
			</div>
			<div class="form">
				<label>Availability</label>
				<input id="inAvailable" type="text" name="availability">
			</div>
			<div class="form">
				<label>Age</label>
				<input id="inAge" type="number" name="age">
			</div>
			<div class="form">
				<label>Location</label>
				<input id="inLocation" type="text" name="location">
			</div>
			<div class="form">
				<label>Years Experience</label>
				<input id="inYears" type="number" name="years">
			</div>
			<div class="form">
				<label>Email</label>
				<input id="inEmail" type="email" name="email">
			</div>
			<div class="form">
				<input onclick="" type="submit" name="submit" value="submit" class="bg-blue">
			</div>
		</form>
	</section>

	<script src="assets/js/main.js"></script>
</body>
</html>