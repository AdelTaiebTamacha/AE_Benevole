<html>

<?php



function connect_PDO($server, $name, $login, $password){
    try{

        $conn = new PDO("mysql:host=".$server.";dbname=".$name, $login, $password);
    }
    catch(Exception $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }
    return $conn;
}

function get_info($conn, $donnee) {
	
	
	///////////////////////////////////////////   10:00 - 12:00 
	echo $donnee["NumEquipe"]."</br>";
	$sql_10 = "SELECT CoorLieu FROM CreneauHoraire WHERE HDebut = '10:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $result = $conn->query($sql_10)->fetch();
	echo $result["CoorLieu"]."</br>";
	$_SESSION['repere_10'] = $result["CoorLieu"];
	
    $sql_10 = "SELECT Tache FROM lieu WHERE CoorLieu LIKE "."'".$result["CoorLieu"]."'";
    $tache_10 = $conn->query($sql_10)->fetch();
	echo $tache_10["Tache"];
	$_SESSION['tache_10'] = $tache_10["Tache"];
	
	///////////////////////////////////////////   12:00 - 14:00
	$sql_12 = "SELECT CoorLieu FROM CreneauHoraire WHERE HDebut = '12:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $result = $conn->query($sql_12)->fetch();
	echo $result["CoorLieu"]."</br>";
	$_SESSION['repere_12'] = $result["CoorLieu"];
	
    $sql_12 = "SELECT Tache FROM lieu WHERE CoorLieu LIKE "."'".$result["CoorLieu"]."'";
    $tache_12 = $conn->query($sql_12)->fetch();
	echo $tache_12["Tache"];
	$_SESSION['tache_12'] = $tache_12["Tache"];
	
	
	///////////////////////////////////////////   14:00 - 16:00
	$sql_14 = "SELECT CoorLieu FROM CreneauHoraire WHERE HDebut = '14:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $result = $conn->query($sql_14)->fetch();
	echo $result["CoorLieu"]."</br>";
	$_SESSION['repere_14'] = $result["CoorLieu"];
	
    $sql_14 = "SELECT Tache FROM lieu WHERE CoorLieu LIKE "."'".$result["CoorLieu"]."'";
    $tache_14 = $conn->query($sql_14)->fetch();
	echo $tache_14["Tache"];
	$_SESSION['tache_14'] = $tache_14["Tache"];
	
	
	///////////////////////////////////////////   16:00 - 18:00
	$sql_16 = "SELECT CoorLieu FROM CreneauHoraire WHERE HDebut = '16:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $result = $conn->query($sql_16)->fetch();
	echo $result["CoorLieu"]."</br>";
	$_SESSION['repere_16'] = $result["CoorLieu"];
	
    $sql_16 = "SELECT Tache FROM lieu WHERE CoorLieu LIKE "."'".$result["CoorLieu"]."'";
    $tache_16 = $conn->query($sql_16)->fetch();
	echo $tache_16["Tache"];
	$_SESSION['tache_16'] = $tache_16["Tache"];



	
	$_SESSION['prenom'] = $donnee["Prenom"];
	$_SESSION['nom'] = $donnee["Nom"];
	$_SESSION['NumEquipe'] = $donnee["NumEquipe"];

}

		
function login($login,$password) {
	
	
	if ($login == "'admin'" and $password == "admin"){
		header('Location: admin.php');
		echo "hello";
	}

	$BDD_server = "localhost";
	$BDD_name = "benevole";
	$BDD_login = "root";
	$BDD_password = "";
	
    $conn = connect_PDO($BDD_server, $BDD_name, $BDD_login, $BDD_password);
    // $sql = "SELECT Nom, Prenom, Login, mdp, NumEquipe  FROM Benevole";
	$sql = "SELECT Nom, Prenom, Login, mdp, NumEquipe  FROM Benevole WHERE Login = ".$login;


	echo "connexion"."<br/>";

    try {
        $result = $conn->query($sql);
        $donnee = $result->fetch();
        echo $donnee["Login"]." - ".$donnee["mdp"]."<br>";
    }
    catch(Exception $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }

	echo "requete"."<br/>";
	
    if (empty($donnee["Login"])) {
		
		session_start();
		$_SESSION["login_err"] = "block";
		$_SESSION["pass_err"] = "none";
		header('Location: login.php');
		
        echo "login errone".'<br/>';
        echo '<a href="login.php">'."Essayer de se reconnecter".'</a>';


}
    else{
        if ($donnee["mdp"] == $password) {
//           echo '<a href = "mainPage.php" >'.'Lien 1'.'</a>';

            // On démarre la session AVANT d'écrire du code HTML
            session_start();
			get_info($conn, $donnee);

            header('Location: map.php');
        }
        else{
			session_start();
			$_SESSION["login_err"] = "none";
			$_SESSION["pass_err"] = "block";
			header('Location: login.php');
            echo "mdp errone".'<br/>';
            echo '<a href="login.php">'."Essayer de se reconnecter".'</a>';
        }
    }
  
    
}

login("'".$_POST["login"]."'", $_POST["password"]);
// login("'gui'", "ae18");

?>

</html>

