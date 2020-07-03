<?php
@session_start(); 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="img/travelling.jpg" sizes="32x32">
    <title>TravelingYuk! - Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesomefree/css/all.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo.png" width="148px" height="25px" alt="homepage" class="dark-logo" />
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="index.php" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="?page=kuliner" class="waves-effect"><i class="fas fa-utensils" aria-hidden="true"></i>Kuliner</a>
                        </li>
                        <li>
                            <a href="?page=wisata" class="waves-effect"><i class="fas fa-air-freshener" aria-hidden="true"></i>Objek Wisata</a>
                        </li>
                        <li>
                            <a href="?page=akomodasi" class="waves-effect"><i class="fas fa-hotel" aria-hidden="true"></i>Akomodasi</a>
                        </li>
                        <li>
                            <a href="?page=galeri" class="waves-effect"><i class="fas fa-umbrella-beach" aria-hidden="true"></i>Galery</a>
                        </li>
                        <li>
                            <a href="?page=artikel" class="waves-effect"><i class="fas fa-book" aria-hidden="true"></i>Artikel</a>
                        </li>
                        <li>
                            <a href="?page=itinerari" class="waves-effect"><i class="fas fa-heartbeat" aria-hidden="true"></i>Itinerari</a>
                        </li>
                         <li>
                            <a href="?page=pesan" class="waves-effect"><i class="fas fa-envelope" aria-hidden="true"></i>Pesan</a>
                        </li>
                    </ul>
                </nav>

    </div>
    
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
               
                </div>
                <div class="content">
        <div class="container-fluid">
          <?php
            if(@$_GET['page']==""){
                include "views/views.php";
            }else if(@$_GET['page']=="kuliner"){
                if(@$_GET['act']==""){
                    include "views/d.kuliner.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.kuliner.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.kuliner.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.kuliner.php";
                }
            }else if(@$_GET['page']=="wisata"){
                if(@$_GET['act']==""){
                    include "views/d.wisata.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.wisata.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.wisata.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.wisata.php";
                }
            }else if(@$_GET['page']=="galeri"){
                if(@$_GET['act']==""){
                    include "views/d.galeri.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.galeri.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.galeri.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.galeri.php";
                }
            }else if(@$_GET['page']=="akomodasi"){
                if(@$_GET['act']==""){
                    include "views/d.akomodasi.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.akomodasi.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.akomodasi.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.akomodasi.php";
                }
            }else if(@$_GET['page']=="artikel"){
                if(@$_GET['act']==""){
                    include "views/d.artikel.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.artikel.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.artikel.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.artikel.php";
                }
            }else if(@$_GET['page']=="itinerari"){
                if(@$_GET['act']==""){
                    include "views/d.itinerari.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.itinerari.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.itinerari.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.itinerari.php";
                }
            }else if(@$_GET['page']=="pesan"){
                if(@$_GET['act']==""){
                    include "views/d.pesan.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.pesan.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.pesan.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.pesan.php";
                }
            
  
            }

        ?>
        </div>

        
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
