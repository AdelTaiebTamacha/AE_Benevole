<html>
<head>

    <?php


    function connect() {

        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        return $conn;

    }


    function verif_login($login, $mdp) {
        $conn = connect();

        $bd_login = "IENAC17_NOM";

        $sql = "SELECT Login, Mpd FROM Benevole WHERE Login LIKE %s"
				$result = mysqli_query($conn, $sql);

				if ($result == 0) {

                    return "Mauvais identifiants"
				}
                else {
                    $row =  mysqli_fetch_assoc($result);
                    return $row;
                }



			}
    ?>

</head>

<body>

<form method="post" action="../php/connect.php">
    Name: <input type="text" name="name" value="">

    E-mail: <input type="text" name="email" value="">

    <input type="submit" name="submit" value="Submit">
</form>

</body>


</html>