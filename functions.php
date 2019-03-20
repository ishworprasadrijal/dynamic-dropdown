<?php 

function provinces(){
	return ["Province No. 1", "Province No. 2", "Province No. 3", "Province No. 4", "Province No. 5", "Province No. 6", "Province No. 7"];
}

function district1(){
	return ["Bhojpur", "Dhankuta", "Ilam", "Jhapa", "Khotang", "Morang", "Okhaldhunga", "Panchthar", "Shankhuwasava", "Solukhumbu", "Sunsari", "Taplejung", "Terathum", "Udaypur"];
}

function district2(){
	return ["Saptari", "Siraha", "Dhanusha", "Mahottari", "Sarlahi", "Bara", "Parsa", "Rautahat"];
}

function district3(){
	return ["Sindhuli", "Ramechhap", "Dolakha", "Bhaktapur", "Dhading", "Kathmandu", "Kavrepalanchok", "Lalitpur", "Nuwakot", "Rassuwa", "Sindhupalchok", "Chitwan", "Makwanpur"];
}

function district4(){
	return ["Baglung", "Gorkha", "Kaski", "Lamjung", "Manang", "Mustang", "Myagdi", "Nawalpur", "Parbat", "Syanja", "Tanahun"];
}

function district5(){
	return ["Kapilvastu", "Parasi", "Rupendehi", "Arghakhachhi", "Gulmi", "Palpa", "Dang", "Pyuthan", "Rolpa", "East Rukum", "Banke", "Bardiya"];
}

function district6(){
	return ["West Rukum", "Salyan", "Dolpa", "Humla", "Jumla", "Kalikot", "Mugu", "Surkhet", "Dailekh", "Jajarkot"];
}

function district7(){
	return ["Kailali", "Achham", "Doti", "Bajhang", "Bajura", "Kanchanpur", "Dadeldhura", "Baitadi", "Darchula"];
}

$q= @$_GET['q'];
echo json_encode($q()); exit;

?>