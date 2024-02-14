<?php
session_start();
include("../conn.inc.php");

if(
    isset($_SESSION['admin_access']) && !empty($_SESSION['admin_access']) &&
    isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])
 ){
    $admin_id = $_SESSION['admin_id'];
 }else{
    header('Location: ./login');
 }

// admin
$sql_ADMIN = "SELECT * FROM `admin` WHERE id='$admin_id' ";
$query_ADMIN = mysqli_query($conn, $sql_ADMIN);
$num_rows_ADMIN = mysqli_num_rows($query_ADMIN);
$fetch_assoc_ADMIN = mysqli_fetch_assoc($query_ADMIN);

// total user
$sql_show_data = "SELECT * FROM `passposrt_users_info` ";
$query_show_data = mysqli_query($conn, $sql_show_data);
$num_rows_show_data = mysqli_num_rows($query_show_data);
$fetch_assoc_show_data = mysqli_fetch_assoc($query_show_data);

$curernt_date;

// Today Add user
$sql_show_data_tody = "SELECT * FROM `passposrt_users_info` WHERE submit_date='$curernt_date' ";
$query_show_data_tody = mysqli_query($conn, $sql_show_data_tody);
$num_rows_show_data_tody = mysqli_num_rows($query_show_data_tody);
$fetch_assoc_show_data_tody = mysqli_fetch_assoc($query_show_data_tody);


?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> E-V-V Admin </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/add.new.user.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../asset/img/icon.ico">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3"> Electronic Visa Validation </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tools
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user-plus fa-cog"></i>
                    <span>Action</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="./add.new.user.php">Add New User</a>
                        <a class="collapse-item" href="./edit.user.php">Edit User</a>
                    </div>
                </div>
            </li>
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
                    <form action="./admin.user.Search.php" method="get">
                        <input class="top_search_filed" type="text" name="search" id="" placeholder="Serach user by passport number">
                        <input style="border-radius: 100px;" class="btn btn-info" type="submit" value="Search">
                    </form>   
                 


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">




                        <!-- PROFILE SECTION START -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fetch_assoc_ADMIN['name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/admin/<?php echo $fetch_assoc_ADMIN['imgs']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="http://localhost/passport%20validation%20system/im.admin/admin.profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="http://localhost/passport%20validation%20system/im.admin/admin.logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



                <!-- user Info total and today user add -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_rows_show_data; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Today Add Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_rows_show_data_tody; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Website Develop by <span style="font-size: 15px;">Abidur Rahman</span></span>
                        <br><br>
                        <span style="margin-top: 10px;"><a href="mailto:abidurrahman9837@gmail.com">abidurrahman9837@gmail.com</a></span>
                        <span style="margin-left: 10px;"> <a href="https://wa.me/+8801840249837">01840249837</a></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        

    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
