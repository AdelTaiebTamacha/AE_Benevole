<?php


function connect() {
	
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
	return $conn;

}


function verif_login() {
	$conn = new mysqli("localhost", "root", "");

	
	//$sql = "SELECT Login, Mpd FROM Benevole WHERE Login LIKE %s";
	$sql = "USE benevole_test SELECT * FROM benevole";
	$result = mysqli_query($conn, $sql);
	
	echo "<br>";
	echo mysqli_fetch_assoc($result);
	
	if ($result == 0) {
		
		return "Mauvais identifiants";
	}
	else {
		$row = $result->fetch_assoc();
		echo $row;
	}
	
	
	
}

function connect_PDO($server, $name, $login, $password){
	try{
		
		$conn = new PDO("mysql:host=".$server.";dbname=".$name, $login, $password);
	}
	catch(Exception $e) {
		echo "Erreur !: " . $e->getMessage() . "<br/>";
	}
	return $conn;
}


function testPDO() {
	
	$conn = connect_PDO("localhost", "benevole_test", "root", "");
	
	try {
		$result = $conn->query("SELECT * FROM benevole");
		
		while($donnee = $result->fetch()) {
			echo "<br>".$donnee["IdBenevole"]." - ".$donnee["Nom"];
		}
	}
	catch(Exception $e) {
		echo "Erreur !: " . $e->getMessage() . "<br/>";
	}
}

function login($login,$password) {

	$conn = connect_PDO("localhost", "benevole_test", "root", "");
	$sql = "SELECT Login, mdp FROM `benevole` WHERE Login = ".$login;
	
	
	try {
		$result = $conn->query($sql);		
		$donnee = $result->fetch();
		echo "<br/>".$donnee["Login"]." - ".$donnee["mdp"]."<br>";
		
	}
	catch(Exception $e) {
		echo "Erreur !: " . $e->getMessage() . "<br/>";
	}
	
	 
	if (empty($donnee["Login"])) {
		echo "login errone";
	}
	else{
		if ($donnee["mdp"] == $password) {
			echo "mdp correct";
		}
		else{
			echo "mdp errone";
		}
		
	}
} 
	
echo $_POST["login"];
echo $_POST["password"];
login("'".$_POST["login"]."'", $_POST["password"]);

//login("'Camile@gmail.com'", "Enac***");
//login("'Camille@gmail.com'", "Enac***");
//login("'Camille@gmail.com'", "Enac****");
	
?>



