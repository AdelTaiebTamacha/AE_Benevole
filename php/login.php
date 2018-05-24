<!Doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Bénévoles | Log in</title>
<!--        <link rel="stylesheet" type="text/css" href="style.css"/>-->
        <link rel="stylesheet" type="text/css" href="look.css"/>
    </head>

    <header>
        <div class="login-box">
            <div class="login-logo">
                <h1> <strong>Airexpo 2018</strong> Bénévoles</h1>
                <p><em>Bienvenue sur la page des Bénévoles d'Airexpo 2018 !</em></p>
            </div>
        </div>
    </header>

<!--login-logo-->
    <body class="hold-transition login-page">
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
			<?php 
				
				session_start();
				//echo $_SESSION["login_err"];
				//echo $_SESSION["pass_err"];
				
				$login_err = "none";
				$pass_err = "none";
			
				if (isset($_SESSION["login_err"])){
					$login_err = $_SESSION["login_err"];
				}
				if (isset($_SESSION["pass_err"])){
					$pass_err = $_SESSION["pass_err"];
				}
				session_destroy();
				echo '<p class="login-box-msg" style= "display :'.$login_err.'">Login erroné</p>';
				echo '<p class="login-box-msg" style= "display :'.$pass_err.'">Password erroné</p>';
			?>
			 
            <form method="post" action="connect.php">
                <div class="form-group has-feedback">
                    <input type="text" name="login" value="mail">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" value="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
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