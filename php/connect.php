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


function login($login,$password) {

	$BDD_server = "localhost";
	$BDD_name = "benevole_test";
	$BDD_login = "root";
	$BDD_password = "";
	
    $conn = connect_PDO($BDD_server, $BDD_name, $BDD_login, $BDD_password);
    $sql = "SELECT nom, prenom, login, mdp FROM benevole WHERE login = ".$login;
	//"SELECT nom, prenom, email, password FROM benevole";// WHERE login = ".$login;
	
	echo "connexion";

    try {
        $result = $conn->query($sql);
        $donnee = $result->fetch();
        echo "<br/>".$donnee["login"]." - ".$donnee["mdp"]."<br>";

    }
    catch(Exception $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }


	echo "requete";
	
    if (empty($donnee["login"])) {
        echo "login errone".'<br/>';
        echo '<a href="login.php">'."Essayer de se reconnecter".'</a>';


}
    else{
        if ($donnee["mdp"] == $password) {
//           echo '<a href = "mainPage.php" >'.'Lien 1'.'</a>';

            // On démarre la session AVANT d'écrire du code HTML
            session_start();
            // On s'amuse à créer quelques variables de session dans $_SESSION
            $_SESSION['prenom'] = $donnee["prenom"];
            $_SESSION['nom'] = $donnee["nom"];


            header('Location: map.php');
        }
        else{
            echo "mdp errone".'<br/>';
            echo '<a href="login.php">'."Essayer de se reconnecter".'</a>';
        }

    }
}

login("'".$_POST["login"]."'", $_POST["password"]);


?>

</html>

