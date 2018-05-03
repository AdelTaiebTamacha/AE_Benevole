<html>
	<head>
	  	
		<?php
			function show() {
				echo $_POST["name"];
			}
		?>
		
	</head>

	<body>
	
		<form method="post" action="<?php show();?>">  
		Name: <input type="text" name="name" value="">

		E-mail: <input type="text" name="email" value="">

		<input type="submit" name="submit" value="Submit">  
		</form>
		
	</body>


</html>