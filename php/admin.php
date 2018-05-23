<!Doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Bénévoles | Log in</title>
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
			$dbname = "benevole_test";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$result = $conn->query($sql);
			return $result;
		}
	
		
	
	
	?>


    <body>
	
	
		<script>
			
			function update_name(){
				document.getElementById("demo").innerHTML = "Paragraph changed.";
				
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
				
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <button type="submit" class="btn">Sign In</button>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
			
			<p id="demo"> Helloword </p>
			
			
			<div style="width: 100%; height: 100%; overflow: auto; overflow-x: hidden;">
			
				<?php
					
					$sql = "SELECT IdBenevole, Nom, Prenom, login, mdp FROM benevole";
					//$sql = "SELECT IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit FROM benevole";
					$result = sql_request($sql);

					if ($result->num_rows > 0) {
						
						echo "<table style='width: 100%; height: 200%'><tr><th>IdBenevole</th><th>Nom</th><th>Prenom</th><th>Login</th><th>Mdp</th></tr>";
						// output data of each row
						
						$counter = 0;
						while($row = $result->fetch_assoc()) {
							
							$sep = "</td><td>";
							$line = "";
							$line = $line."<tr><td id='demo'>";
							$line = $line.$row["IdBenevole"];
							$line = $line.$sep;
							$line = $line.$row["Nom"];
							$line = $line.$sep;
							$line = $line.$row["Prenom"];
							$line = $line.$sep;
							$line = $line.$row["login"];
							$line = $line.$sep;
							$line = $line.$row["mdp"];
							$line = $line.$sep;
							$line = $line.'<button type="button" onclick="update_name()" class="">Modifier</button>';
							$line = $line."</td></tr>";
							echo $line;
						}
						echo "</table>";
						
					} else {
						echo "0 results";
					}
					$conn->close();
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