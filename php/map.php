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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Eq.</b> X</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Equipe</b> X</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only" id="barre">Toggle navigation</span>
      </a>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- ON POURRA METTRE LE NUMERO DE L'EQUIPE SOUS FORME D'IMAGE ICI-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Bénévole A</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <!-- ON POURRA METTRE LE NUMERO DE L'EQUIPE SOUS FORME D'IMAGE ICI-->
              <li class="user-header">
                <img src="dist/img/user5-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                    Bénévole B
                </p>
              </li>
              </li>
              <!-- Menu Footer-->
                <div class="pull-center">
                  <a href="deconnect.php" class="btn btn-default btn-flat">Déconnexion</a>
                </div>
              </li>
            </ul>
            <!-- search form (Optional) -->
				<form action="#" method="get" class="sidebar-form">
      			<div class="input-group">
         			<input type="text" name="q" class="form-control" placeholder="Search...">
          				<span class="input-group-btn">
            	  			<button type="submit-left" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            			</span>
        			</div>
      		</form>
				<!-- /.search form -->
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ?></p>
          <p><small>Bénévole Airexpo 2018</small></p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="map.php"><i class="fa fa-map"></i> <span>Carte</span></a></li>
        <li><a href="planning.php"><i class="fa fa-calendar"></i> <span>Planning</span></a></li>
        <li><a href="#"><i class="fa fa-flag"></i> <span>Points de repère</span></a></li>
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
      <h1>
        Plan du Site
        <small>Carte de l'aérodrome de Muret-Lherm</small>
        <h5>
            <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/select_pts_repere.css">
            <select name="select">
                <optgroup label ="Points de Repère">
                    <option value ="1">Alpha 1</option>
                    <option value="2">Alpha 2</option>
                    <option value="3">Prendre les points de repère dans la bdd</option>
                </optgroup>
        </h5>
      </h1>

        </select>
    </section>

    <!-- Main content -->
    <section>
		
		<p>
			<map name="map_site" id="id_map_site">
				<area shape="circle" coords="20, 10, 10" href="../php/planning.php" alt="vers a"/>
      	<img src="../documents/Plan.png" height="600px" width="90%" usemap="map_site" alt="image">
		</p>
				
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
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
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