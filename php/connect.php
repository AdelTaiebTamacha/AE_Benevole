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
        echo "login errone";
    }
    else{
        if ($donnee["password"] == $password) {
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

?>

</html>

