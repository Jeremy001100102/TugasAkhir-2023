
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- export -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"> 

  <!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"> -->
    


    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" href="./bootstrap-5.2.3/dist/css/bootstrap.css">  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
 


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .style-dropdown {
          max-height: 150px;
          overflow-y: auto;
      }

      .no-overflow {
        position: static;
    }
    .scrollable-dropdown {
    max-height: calc(100% - 30px); /* 30px adalah tinggi dari dropdown header */
    overflow-y: auto;
}

    .sb{
        margin-bottom: -25px;
    }

    .musimKemarau{
        border-left: 3px solid red !important;

    }

    .musimHujan{
        border-left: 3px solid blue !important;
    }

    /*table {
        line-height:10px;
    }*/

    /*li:nth-child(1){
        margin-bottom: 10px;
    }*/

</style>

</head>

<body id="page-top">

 <!-- Page Wrapper -->
 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon">
                <i class="fa-solid fa-user"></i>          
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item sb">
                <a class="nav-link" href="input-data.php" 
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-keyboard"></i>
                <span>Input Data</span>
            </a>

        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == 'data-hasil-simulasi.php') ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="data-hasil-simulasi.php" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Hasil Simulasi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Calculation
    </div>


    <!-- Nav Item - Frekuensi -->
    <li class="nav-item sb  <?php echo isset($_GET['frek']) ? 'active' : ''; ?>">
        <a class="nav-link" href="kalkulasi.php?frek=jeremy">
            <i class="fas fa-fw fa-wave-square"></i>
            <span>Frekuensi</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item sb <?php echo isset($_GET['prob']) ? 'active' : ''; ?>">
        <a class="nav-link" href="kalkulasi.php?prob=jeremy">
            <i class="fas fa-fw fa-dice"></i>
            <span>Probabilitas</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item sb <?php echo isset($_GET['kumu']) ? 'active' : ''; ?>">
            <a class="nav-link" href="kalkulasi.php?kumu=jeremy">
                <i class="fa-solid fa-arrow-up-right-dots"></i>
                <span>Kumulatif</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item sb <?php echo isset($_GET['inter']) ? 'active' : ''; ?>">
                <a class="nav-link" href="kalkulasi.php?inter=jeremy">
                    <i class="fa-solid fa-arrows-left-right"></i>
                    <span>Interval</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item sb <?php echo isset($_GET['acak']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="kalkulasi.php?acak=jeremy">
                        <i class="fa-solid fa-shuffle"></i>
                        <span>Angka Acak</span></a>
                    </li>

                    <!-- Nav Item - Tables -->
                    <li class="nav-item sb <?php echo isset($_GET['hs']) ? 'active' : ''; ?> ">
                        <a class="nav-link" href="kalkulasi.php?hs=jeremy">
                           <i class="fa-solid fa-square-poll-horizontal"></i> 
                           <span>Hasil Simulasi</span></a>
                       </li>

                       <!-- Nav Item - Tables -->
                       <li class="nav-item <?php echo isset($_GET['rs']) ? 'active' : ''; ?> ">
                        <a class="nav-link" href="kalkulasi.php?rs=jeremy">
                           <i class="fa-solid fa-arrow-rotate-left"></i> 
                           <span>Reset</span></a>
                       </li>

                       <!-- Divider -->
                       <hr class="sidebar-divider d-none d-md-block">

                       <!-- Sidebar Toggler (Sidebar) -->
                       <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <!-- Topbar Search -->
                   <!--  <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages  -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> 





                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2  d-lg-inline text-gray-600 small text-capitalize"><?= $_SESSION['username']; ?></span>
                    <img class="img-profile rounded-circle"
                    src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="akun.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Akun
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Pilih "Logout" dibawah ini jika anda ingin keluar</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
    </div>
</div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">