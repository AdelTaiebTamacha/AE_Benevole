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

    $conn = connect_PDO("localhost", "test", "root", "root");
    $sql = "SELECT nom, prenom, email, password FROM essai WHERE email = ".$login;


    try {
        $result = $conn->query($sql);
        $donnee = $result->fetch();
        echo "<br/>".$donnee["email"]." - ".$donnee["password"]."<br>";

    }
    catch(Exception $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }


    if (empty($donnee["email"])) {
        echo "login errone".'<br/>';
        echo '<a href="login.php">'."Essayer de se reconnecter".'</a>';


}
    else{
        if ($donnee["password"] == $password) {
//           echo '<a href = "mainPage.php" >'.'Lien 1'.'</a>';

            // On démarre la session AVANT d'écrire du code HTML
            session_start();
            // On s'amuse à créer quelques variables de session dans $_SESSION
            $_SESSION['prenom'] = $donnee["prenom"];
            $_SESSION['nom'] = $donnee["nom"];

            header('Location: mainPage.php');
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

