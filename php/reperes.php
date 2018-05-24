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
        <li><a href="planning.php"><i class="fa fa-calendar"></i> <span>Planning</span></a></li>
        <li class="active"><a href="reperes.php"><i class="fa fa-flag"></i> <span>Points de repère</span></a></li>
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
        Liste des points de repère
      </h1>

        </select>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <link rel="stylesheet" href="select_pts_repere.css">
        <div class="row">
            <div class="col-md-4 col-xs-12">
            <section id="reperes">
                <table class="table" data-toggle="table"  data-search="true" data-pagination="true"  data-page-size="3">
                    <thead>
                    <tr>
                        <th data-field="col1" data-sortable="true">Points de repère</th>
                        <th data-field="col2" data-sortable="true">Coordonnées carte</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
						<td>AA</td>
						<td><a href="#ancre">7E</a></td>
					</tr>
					<tr>
						<td>EV</td>
						<td><a href="#ancre">6F</a></td>
					</tr>
					<tr>
						<td>HA</td>
						<td><a href="#ancre">5B</a></td>
					</tr>
					<tr>
						<td>HB</a></td>
						<td><a href="#ancre">4B</a></td>
					</tr>
					<tr>
						<td>IA</td>
						<td><a href="#ancre">7B</a></td>
					</tr>
					<tr>
						<td>IB</td>
						<td><a href="#ancre">7C</a></td>
					</tr>
					<tr>
						<td>IC</td>
						<td><a href="#ancre">7C</a></td>
					</tr>
					<tr>
						<td>ID </td>
						<td><a href="#ancre">7D</a></td>
					</tr>
					<tr>
						<td>IE</td>
						<td><a href="#ancre">7E</a></td>
					</tr>
					<tr>
						<td>IF</td>
						<td><a href="#ancre">7F</a></td>
					</tr>
					<tr>
						<td>IG</td>
						<td><a href="#ancre">7G</a></td>
					</tr>
					<tr>
						<td>IH</td>
						<td><a href="#ancre">7J</a></td>
					</tr>
					<tr>
						<td>NA</td>
						<td><a href="#ancre">4E</a></td>
					</tr>
					<tr>
						<td>NB</td>
						<td><a href="#ancre">4D</a></td>
					</tr>
					<tr>
						<td>NC</td>
						<td><a href="#ancre">5E</a></td>
					</tr>
					<tr>
						<td>ND</td>
						<td><a href="#ancre">4E</a></td>
					</tr>
					<tr>
						<td>NE</td>
						<td><a href="#ancre">4E</a></td>
					</tr>
					<tr>
						<td>PZ</td>
						<td><a href="#ancre">5G</a></td>
					</tr>
					<tr>
						<td>RA</td>
						<td><a href="#ancre">4F</a></td>
					</tr>
					<tr>
						<td>RB</td>
						<td><a href="#ancre">5H</a></td>
					</tr>
					<tr>
						<td>RC</td>
						<td><a href="#ancre">6I</a></td>
					</tr>
					<tr>
						<td>RD</td>
						<td><a href="#ancre">6I</a></td>
					</tr>
					<tr>
						<td>RE</td>
						<td><a href="#ancre">7N</a></td>
					</tr>
					<tr>
						<td>RF</td>
						<td><a href="#ancre">2O</a></td>
					</tr>
					<tr>
						<td>SA</td>
						<td><a href="#ancre">6F</a></td>
					</tr>
					<tr>
						<td>SB</td>
						<td><a href="#ancre">6D</a></td>
					</tr>
					<tr>
						<td>SC</td>
						<td><a href="#ancre">6C</a></td>
					</tr>
					<tr>
						<td>SD</td>
						<td><a href="#ancre">6C</a></td>
					</tr>
					<tr>
						<td>SE</td>
						<td><a href="#ancre">7C</a></td>
					</tr>
					<tr>
						<td>SF</td>
						<td><a href="#ancre">6D</a></td>
					</tr>
					<tr>
						<td>SG</td>
						<td><a href="#ancre">6E</a></td>
					</tr>
					<tr>
						<td>VD</td>
						<td><a href="#ancre">7E</a></td>
					</tr>
					<tr>
						<td>ZT</td>
						<td><a href="#ancre">7D</a></td>
					</tr>
					<tr>
						<td>ZV</td>
						<td><a href="#ancre">7F</a></td>
					</tr>
                    </tbody>
                </table>
            </section>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12" >
                    <b id="ancre">
                <img src="../documents/Site_quadrille.png" width="100%">
                    </b>
                </div>
            </div>
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
    <strong>Copyright &copy; 2016 <a href="http://airexpo.org">Company</a>.</strong> All rights reserved.
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