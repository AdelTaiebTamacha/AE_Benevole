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
        <li><a href="reperes.php"><i class="fa fa-flag"></i> <span>Points de repère</span></a></li>
        <li class="active"><a href="infos.php"><i class="fa fa-bell"></i> <span>Informations diverses</span></a></li>
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
        Informations diverses
      </h1>

        </select>
    </section>

        <!-- Main content -->
        <section class="content container-fluid">
        <link rel="stylesheet" href="infos.css">
            <h4><b>Mesures de sûreté</b></h4>
            <br />
            <div class="row">
                <div class="col-xs-12">
                    <img src="../documents/objets_interdits.png" width="80%">
                </div>
            </div>


            <br /><br />


            <h4><b>Bracelets de reconnaissance</b></h4>
            <br />
            <p>Différents types de bracelets existent et donnent accès à des zones spécifiques</p>
            <div class="row">
                <div class="col-xs-12">
                    <table>
                        <tr>
                            <td>Couleur</td>
                            <td>Personnes concernées</td>
                            <td>Zones accessibles</td>
                        </tr>
                        <tr>
                            <td>Rouge</td>
                            <td>
                                Les forces de l'ordre <br />
                                Responsables de la piste <br />
                                Commission Avion <br />
                                Certaines personnes du bureau
                            </td>
                            <td>Partout</td>
                        </tr>
                        <tr class = "txt_jaune">
                            <td>Jaune</td>
                            <td>Equipages</td>
                            <td>
                                Les hangars <br />
                                Zone VIP <br />
                                Réfectoire <br />
                                Piste accompagné d'un rouge <br />
                                Zone publique
                            </td>
                        </tr>
                        <tr class = "txt_orange">
                            <td>Orange</td>
                            <td>Exposants</td>
                            <td>
                                Zone publique <br />
                                Parking P0
                            </td>
                        </tr>
                        <tr>
                            <td>Vert</td>
                            <td>Personnes de l'organisation</td>
                            <td>
                                Dépend de la mission à réaliser : <br />
                                Zone publique <br />
                                Parkings <br />
                                Zone VIP <br />
                                Zone Amis d'Airexpo <br />
                                Zone Trescal <br />
                            </td>
                        </tr>
                        <tr>
                            <td>Violet</td>
                            <td>Amis d'Airexpo</td>
                            <td>
                                Zone publique <br />
                                Amis d'Airexpo
                            </td>
                        </tr>
                        <tr>
                            <td>Bleu</td>
                            <td>VIP</td>
                            <td>
                                Zone publique <br />
                                Zone VIP
                            </td>
                        </tr>
                        <tr>
                            <td>Rose</td>
                            <td>Trescal</td>
                            <td>
                                Zone publique <br />
                                Zone réservée au partenaire Trescal
                            </td>
                        </tr>
                        <tr>
                            <td>Blanc</td>
                            <td>Journaliste</td>
                            <td>
                                Zone publique <br />
                                Zone VIP
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


                    <br />
                    <br />

                    <h4><b>Les roulements</b></h4>
                    <br />
                    <p>
                        Chaque équipe changera de point d'affectaion toutes les 2h maximum.
                    </p>
                    <a  href="planning.php">
                        Voir les détails sur le planning
                    </a>

                    <br /><br />

                    <h4><b>Talkies Walkies</b></h4>
                    <br />
                    <p>
                        Chaque chef d'équipe aura un talkie walkie en sa possession pour communiquer avec l'équipe<br />
                        8 canaux sont utilisés pour l'organisation du meeting. Deux d'entre eux concernent les bénévoles :
                    <li><b>Canal 1</b> : communication sur la plateforme avec le responsable bénévole Tanguy Lopez</li>
                    <li><b>Canal 5</b> : communication sur les parkings avec la responsable circulation Morgane Buil</li>
                    </p>

            <br /><br />

            <h4><b>Alphabet Aéronautique</b></h4>
            <br />

            <div class="row">
                <div class="col-xs-12">
                    <img src="../documents/alphabet_aeronautique.jpg" width="80%">
                </div>
            </div>


            <br /><br />

            <h4><b>Personnes à contacter en cas de difficultés avec un visiteur</b></h4>
            <br />
            <p>
                Les forces de l'ordre (toute personne en uniforme)<br />
                Les agents de la société de sécurité privée RPS<br />
                Les photographes de Spot'Air
            </p>

            <br /><br />
            <h4><b>Contacts</b></h4>
            <br />
            <p>
                <b>Tanguy Lopez</b> - <i>Responsable Bénévoles</i> - 06 14 07 42 64<br />
                <b>Morgane Buil</b> - <i>Responsable Circulation</i> - 06 02 65 76 35<br />
                <b>Camille Delloye</b> - <i>Responsable Logistique</i> - 06 69 07 59 82
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