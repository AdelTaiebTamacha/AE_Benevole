<?php
    session_start();
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bénévolat Airexpo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../dist/css/skins/skin-red.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="sidebar-collapse skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Eq.</b> <?php echo $_SESSION["NumEquipe"]; ?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Equipe</b> <?php echo $_SESSION["NumEquipe"]; ?></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="map.php"><i class="fa fa-map"></i> <span>Carte</span></a></li>
        <li class="active"><a href="planning.php"><i class="fa fa-calendar"></i> <span>Planning</span></a></li>
        <li><a href="reperes.php"><i class="fa fa-flag"></i> <span>Points de repère</span></a></li>
        <li><a href="infos.php"><i class="fa fa-bell"></i> <span>Informations diverses</span></a></li>
                <li class="treeview">
                    <a href="../infos.php"><i class="fa fa-file"></i> <span>Informations</span>
                        <span class="pull-right-container">
            	<i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../template_cv/cv_adel.html">Adel Taieb Tamacha</a></li>
                        <li><a href="../template_cv/cv_tanguy.html">Tanguy Lopez</a></li>
                        <li><a href="../template_cv/cv_camille.html">Camille Delloye</a></li>
                        <li><a href="../template_cv/cv_mathilde.html">Mathilde Merland</a></li>
                        <li><a href="../php/video.php">Video tutoriel</a></li>
                    </ul>
                </li>     
		  <li><a href="deconnect.php"><i class="fa fa-circle"></i> <span>Déconnexion</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="padding-bottom:40px">
        Planning de la journée
      </h1>

        </select>
    </section>

    <!-- Main content -->
    <section>
    		<link rel="stylesheet" href="planning_look.css">
                <table style="border-spacing: 10px 15px">
    					<thead>
    						<tr>
								<td><strong>Horaires</strong></td>
								<td><strong>Point de repère</strong></td>
								<td><strong>Tache à effectuer</strong></td>
							</tr>
						</thead>
						<tbody>

                            <tr>
                                <td>10:00 - 12:00</td>
                                <td><b><?php echo $_SESSION['repere_10'] ?></b></td>
                                <td><?php echo $_SESSION['tache_10'] ?></td>
                            </tr>
                            <tr>
                                <td>12:00 - 14:00</td>
                                <td><b><?php echo $_SESSION['repere_12'] ?></b></td>
                                <td><?php echo $_SESSION['tache_12'] ?></td>
                            </tr>
                            <tr>
                                <td>14:00 - 16:00</td>
                                <td><b><?php echo $_SESSION['repere_14'] ?></b></td>
                                <td><?php echo $_SESSION['tache_14'] ?></td>
                            </tr>
                            <tr>
                                <td>16:00 - 18:00</td>
                                <td><b><?php echo $_SESSION['repere_16'] ?></b></td>
                                <td><?php echo $_SESSION['tache_16'] ?></td>
                            </tr>
						</tbody>
					</table>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <a href="http://airexpo.org/">Airexpo</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="http://airexpo.org">Airexpo</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script type="text/javascript">
    $("#barre").click();
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>