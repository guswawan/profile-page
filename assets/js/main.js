var formMenu = document.getElementById("input-form");
formMenu.style.display = "none";


//funsi edit form
function editForm() {
if (formMenu.style.display === "none") { //sembunyikan input-form/modal
	formMenu.style.display = "block"
} else {
	formMenu.style.display = "none"
}

	//bikin variabel
	var name = document.getElementById("viName").innerHTML;
	document.getElementById("inName").value = name;

	var role = document.getElementById("viRole").innerHTML;
	document.getElementById("inRole").value = role;

	var available = document.getElementById("viAvailable").innerHTML;
	document.getElementById("inAvailable").value = available;

	var age = document.getElementById("viAge").innerHTML;
	document.getElementById("inAge").value = age;

	var location = document.getElementById("viLocation").innerHTML;
	document.getElementById("inLocation").value = location;

	var experience = document.getElementById("viYears").innerHTML;
	document.getElementById("inYears").value = experience;

	var email = document.getElementById("viEmail").innerHTML;
	document.getElementById("inEmail").value = email;
}


//funsi submit form
function submitForm() {
	formMenu.style.display = "none";
	var name = document.getElementById("inName").value;
	document.getElementById("viName").innerHTML = name;

	var role = document.getElementById("inRole").value;
	document.getElementById("viRole").innerHTML = role;

	var available = document.getElementById("inAvailable").value;
	document.getElementById("viAvailable").innerHTML = available;

	var age = document.getElementById("inAge").value;
	document.getElementById("viAge").innerHTML = age;

	var location = document.getElementById("inLocation").value;
	document.getElementById("inLocation").innerHTML = location;

	var experience = document.getElementById("inYears").value;
	document.getElementById("viYears").innerHTML = experience;

	var email = document.getElementById("inEmail").value;
	document.getElementById("viEmail").innerHTML = email;
}

// funsi show menu
function showMenu() {
	var menu = document.getElementById("menu");
	var box = document.getElementById("box-profile");

	if (menu.style.display === "block") {
		menu.style.display = "none";
		box.style.paddingTop = "0px";
	} else {
		menu.style.display = "block";
		bo.style.paddingTop = "125px";
	}
}