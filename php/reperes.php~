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
  <link rel="stylesheet" href="../dist/css/skins/skin-red.min.css">

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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Eq.</b> X</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Equipe</b> X</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" >
      <!-- Sidebar toggle button-->
      <a data-toggle="push-menu" role="button">
        <span class="sr-only" id="barre">Toggle navigation</span>
      </a>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a class="dropdown-toggle" data-toggle="dropdown" style="float: right">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs" align="right"><img src="../documents/logoAE.png" class="button" align="right" width="4%" alt="User Image"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../documents/logoAE.png" width="7%">
                <p>
                    Bénévole B
                </p>
              </li>
              </li>
              <!-- Menu Footer-->
                <div class="pull-center">
                  <a href="deconnect.php" class="btn btn-default btn-flat" align="center">Déconnexion</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
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
        <li class="treeview">
          <a href="#"><i class="fa fa-bell"></i> <span>Actualités</span>
            <span class="pull-right-container">
            	<i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Programmation avions</a></li>
            <li><a href="#">En direct</a></li>
          </ul>
        </li>
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
                        <td><a href="#ancre">AA</a></td>
                        <td>7E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">EV</a></td>
                        <td>6F</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">HA</a></td>
                        <td>5B</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">HB</td>
                        <td>4B</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IA</a></td>
                        <td>7B</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IB</a></td>
                        <td>7C</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IC</a></td>
                        <td>7C</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">ID </a></td>
                        <td>7D</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IE</a></td>
                        <td>7E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IF</a></td>
                        <td>7F</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IG</a></td>
                        <td>7G</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">IH</a></td>
                        <td>7J</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">NA</a></td>
                        <td>4E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">NB</a></td>
                        <td>4D</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">NC</a></td>
                        <td>5E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">ND</a></td>
                        <td>4E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">NE</a></td>
                        <td>4E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">PZ</a></td>
                        <td>5G</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">RA</a></td>
                        <td>4F</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">RB</a></td>
                        <td>5H</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">RC</a></td>
                        <td>6I</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">RD</a></td>
                        <td>6I</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">RE</a></td>
                        <td>7N</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">RF</a></td>
                        <td>2O</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SA</a></td>
                        <td>6F</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SB</a></td>
                        <td>6D</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SC</a></td>
                        <td>6C</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SD</a></td>
                        <td>6C</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SE</a></td>
                        <td>7C</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SF</a></td>
                        <td>6D</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">SG</a></td>
                        <td>6E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">VD</a></td>
                        <td>7E</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">ZT</a></td>
                        <td>7D</td>
                    </tr>
                    <tr>
                        <td><a href="#ancre">ZV</a></td>
                        <td>7F</td>
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