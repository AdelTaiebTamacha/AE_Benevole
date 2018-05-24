<!Doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Bénévoles | Admin</title>
<!--        <link rel="stylesheet" type="text/css" href="style.css"/>-->
        <link rel="stylesheet" type="text/css" href="look.css"/>
		
		<style>
			td	{align:"center";}
		</style>
    </head>

    <header>
        <div class="login-box">
            <div class="login-logo">
                <h1> <strong>Airexpo 2018</strong> Admin</h1>
            </div>
        </div>
    </header>
	
	<?php
	
		function sql_request($sql) {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "benevole";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$result = $conn->query($sql);
			$conn->close();
			return $result;
		}
	
		
	
	
	?>


    <body>
	
	
		<script>
			
			function update_name(){
				
				document.getElementById("demo").innerHTML = "Paragraph changed.";
				
			}
			
			function validateForm() {
				var x = document.forms["myForm"]["fname"].value;
				if (x == "") {
					alert("Name must be filled out");
					return false;
				}
			}
			
			function myFunction() {
				var x, text;

				// Get the value of the input field with id="numb"
				x = document.getElementById("numb").value;

				
				document.getElementById("demo").innerHTML = "Hello";
				
			}
		</script>
		
		
		
		
		
        <div>
            <p class="login-box-msg">Modification </p>
            <form method="post" action="bdd_modifier.php">
                
                    <input type="text" name="login" value="mail">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                
                
                    <input type="password" name="password" value="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
					
					</br>
					
				<?php 
				
				$selector = array();
				for ($i = 1; $i<= 200; $i++){
						$selector[$i]= "";
					}
				$selector[99] = " selected";
				
				
				?>
				<select name="IdBenevole" size="1" style="width:10%;">
					<option value="0">IdBenevole</option>
					<?php	
						for ($i = 1; $i<= 200; $i++){
							echo "<option value='".$i."'".$selector[$i].">".$i."</option>";
						}
					?>
				</select>
				<select name="IdBenevole" size="1" style="width:10%;">
					<option value="0">IdBenevole</option>
					<?php	
						for ($i = 1; $i<= 200; $i++){
							echo "<option value='".$i."'".$selector[$i].">".$i."</option>";
						}
					?>
				</select>
				
				
				
				<input id="numb">

				<button type="button" onclick="myFunction()">Submit</button>

			<p id="demo"></p>
				
				
				
            </form>
			
			<p id="demo" style="display:none;"> Helloword </p>
			
			
			<div style="width: 100%; height: 100%; overflow: auto; overflow-x: hidden;">
			
				<?php
					
					//$sql = "SELECT IdBenevole, Nom, Prenom, login, mdp FROM benevole";
					$sql = "SELECT IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit FROM benevole";
					$result = sql_request($sql);

					if ($result->num_rows > 0) {
						
						$sep = "</th><th>";
						$menu = "<table style='width: 100%; height: 200%'><tr><th>";
						$menu = $menu."IdBenevole";
						$menu = $menu.$sep."Nom";
						$menu = $menu.$sep."Prenom";
						$menu = $menu.$sep."login";
						$menu = $menu.$sep."mdp";
						$menu = $menu.$sep."DateNaiss";
						$menu = $menu.$sep."PaysNaiss";
						$menu = $menu.$sep."VilleNaiss";
						$menu = $menu.$sep."DepNaiss";
						$menu = $menu.$sep."Adresse";
						$menu = $menu.$sep."CodePostal";
						$menu = $menu.$sep."login";
						$menu = $menu.$sep."mdp";
						$menu = $menu.$sep."QualifAero";
						$menu = $menu.$sep."Taille";
						$menu = $menu.$sep."Covoiturage";
						$menu = $menu.$sep."Airexpo17";
						$menu = $menu.$sep."Preference";
						$menu = $menu.$sep."NumEquipe";
						$menu = $menu.$sep."IdEquipeCovoit";
						$menu = $menu."</th></tr>";
						
						echo $menu;
						// output data of each row
						
						$counter = 0;
						while($row = $result->fetch_assoc()) {
							
							$sep = "</td><td>";
							$line = "";
							$line = $line.'<tr><td id="demo">';
							$line = $line.$row["IdBenevole"];
							$line = $line.$sep.$row["Nom"];
							$line = $line.$sep.$row["Prenom"];
							$line = $line.$sep.$row["login"];
							$line = $line.$sep.$row["mdp"];
							$line = $line.$sep.$row["DateNaiss"];
							$line = $line.$sep.$row["PaysNaiss"];
							$line = $line.$sep.$row["VilleNaiss"];
							$line = $line.$sep.$row["DepNaiss"];
							$line = $line.$sep.$row["Adresse"];
							$line = $line.$sep.$row["CodePostal"];
							$line = $line.$sep.$row["login"];
							$line = $line.$sep.$row["mdp"];
							$line = $line.$sep.$row["QualifAero"];
							$line = $line.$sep.$row["Taille"];
							$line = $line.$sep.$row["Covoiturage"];
							$line = $line.$sep.$row["Airexpo17"];
							$line = $line.$sep.$row["Preference"];
							$line = $line.$sep.$row["NumEquipe"];
							$line = $line.$sep.$row["IdEquipeCovoit"];
							$line = $line.'<button type="button" onclick="update_name()" class="">Modifier</button>';
							$line = $line."</td></tr>";
							echo $line;
						}
						echo "</table>";
						
					} else {
						echo "0 results";
					}
					
				?>
			
			</div>

        </div>

        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>