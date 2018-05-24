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
	$BDD_name = "essai";
	$BDD_login = "root";
	$BDD_password = "root";
	
    $conn = connect_PDO($BDD_server, $BDD_name, $BDD_login, $BDD_password);
    $sql = "SELECT Nom, Prenom, Login, mdp, NumEquipe  FROM Benevole WHERE Login = ".$login;
	//"SELECT nom, prenom, email, password FROM benevole";// WHERE login = ".$login;

	
	echo "connexion";

    try {
        $result = $conn->query($sql);
        $donnee = $result->fetch();
        echo "<br/>".$donnee["Login"]." - ".$donnee["mdp"]."<br>";

    }


    catch(Exception $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }

    $sql2 = "SELECT CoorLieu FROM CreneauHoraire WHERE HDebut = '10:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $coorlieu_result10 = $conn->query($sql2);
    echo $coorlieu_result10;
    $sql2_1 = "SELECT Tache FROM lieu WHERE CoorLieu =".$coorlieu_result10;
    $tache_result10 = $conn->query($sql2_1);


    $sql3 = "SELECT CoorLieu FROM creneauhoraire WHERE HDebut = '12:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $coorlieu_result12 = $conn->query($sql3);
    $sql3_1 = "SELECT Tache FROM lieu WHERE CoorLieu =".$coorlieu_result12;
    $tache_result12 = $conn->query($sql3_1);

    $sql4 = "SELECT CoorLieu FROM creneauhoraire WHERE HDebut = '14:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $coorlieu_result14 = $conn->query($sql4);
    $sql4_1 = "SELECT Tache FROM lieu WHERE CoorLieu =".$coorlieu_result14;
    $tache_result14 = $conn->query($sql4_1);

    $sql5 = "SELECT CoorLieu FROM creneauhoraire WHERE HDebut = '16:00' AND IdEquipe = ".$donnee["NumEquipe"];
    $coorlieu_result16 = $conn->query($sql5);
    $sql5_1 = "SELECT Tache FROM lieu WHERE CoorLieu =".$coorlieu_result16;
    $tache_result16 = $conn->query($sql5_1);



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
            $_SESSION['prenom'] = $donnee["Prenom"];
            $_SESSION['nom'] = $donnee["Nom"];
            $_SESSION['equipe'] = $donnee["NumEquipe"];
            $_SESSION['repere_10'] = $coorlieu_result10;
            $_SESSION['repere_12'] = $coorlieu_result12;
            $_SESSION['repere_14'] = $coorlieu_result14;
            $_SESSION['repere_16'] = $coorlieu_result16;
            $_SESSION['tache_10'] = $tache_result10;
            $_SESSION['tache_12'] = $tache_result12;
            $_SESSION['tache_14'] = $tache_result14;
            $_SESSION['tache_16'] = $tache_result16;



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

