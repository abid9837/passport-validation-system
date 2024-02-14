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

$admin_current_img = $fetch_assoc_ADMIN['imgs'];

// update admin 

$wrong_pass = "";
if(isset($_GET['update_admin_req']) && $_GET['update_admin_req']==1){

    if(
        isset($_POST['admin_name']) && $_POST['admin_email'] && $_POST['admin_pass']
    ){
        $admin_name = htmlspecialchars($_POST['admin_name']);
        $admin_email = htmlspecialchars($_POST['admin_email']);
        $admin_pass = htmlspecialchars($_POST['admin_pass']);

        // if input file is 0 means empty
        if($admin_pass==$fetch_assoc_ADMIN['pass']){
            if($_FILES['admin_file']['size'] == 0){
                $admin_file = $admin_current_img;
                $sql = "UPDATE `admin` SET name='$admin_name', email='$admin_email', imgs='$admin_file' WHERE id='$admin_id' ";
                $query = mysqli_query($conn, $sql);
                if($query==true){
                    header('Location: ./admin.logout.php');
                }
            }else{
                $File_name = $_FILES['admin_file']['name'];
                $File_temp_location = $_FILES['admin_file']['tmp_name'];
                $File_move_directory = "./img/admin/".$File_name;
                $file_Extention = pathinfo($File_name, PATHINFO_EXTENSION);
                if( ($file_Extention=="jpg") || ($file_Extention=="jpeg") || ($file_Extention=="png") ||
                    ($file_Extention=="JPG") || ($file_Extention=="JPEG") || ($file_Extention=="PNG") 
                ){
                    move_uploaded_file($File_temp_location,$File_move_directory);

                    $sql = "UPDATE `admin` SET name='$admin_name', email='$admin_email', imgs='$File_name' WHERE id='$admin_id' ";
                    $query = mysqli_query($conn, $sql);
                    if($query==true){
                        header('Location: ./admin.logout.php');
                       
                    }
                }
            }
            
        }else{
            $wrong_pass = "Wrong password";
        }
    }
}









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
    <link rel="icon" type="image/x-icon" href="../asset/img/icon.ico">
    <link href="css/add.new.user.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Admin Profile</h1>
                    </div>
                    <a href="./admin.change.pass.php" class="btn btn-danger"  style="margin-top: 15px;"> Change Admin Password </a>
                    <section id="add_new_user_section_main_container">
                        <!-- /////////////////////////////////////////////// -->
                        
                        <!-- //////////////////////////////////////// -->
                        <div style="margin-top: -100px;" id="add_new_user_section_main_container_inner">
                            <form action="?update_admin_req=1" method="post" enctype="multipart/form-data">
                                <!-- user_name -->
                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Admin Name</label>
                                    <input name="admin_name" type="text" class="form-control" id="user_name" aria-describedby="emailHelp" value="<?php echo $fetch_assoc_ADMIN['name'] ?>" required>
                                </div>

                                <!-- user_email -->
                                <div class="mb-3">
                                    <label for="user_email" class="form-label">Admin Email</label>
                                    <input name="admin_email" type="email" class="form-control" id="user_email" aria-describedby="emailHelp" value="<?php echo $fetch_assoc_ADMIN['email'] ?>" required> 
                                </div>
                                
                                <!-- user_passport_number -->
                                <div class="mb-3">
                                    <label style="margin-bottom: -20px !important" for="user_passport_number" class="form-label">Admin Photo</label><br>
                                    <label  for="" class="form-label">If want to change then click otherwise skip</label>
                                    <input name="admin_file" type="file" class="form-control" aria-describedby="emailHelp">
                                </div>
                                
                                <!-- user_request_number -->
                                <div class="mb-3">
                                    <label style="color: #f6a29b;" for="user_request_number" class="form-label">Type Admin password to change update</label>
                                    <input name="admin_pass" type="password" class="form-control"  aria-describedby="emailHelp" required>
                                </div>
                                
                                
                                <!--  -->
                                <button type="submit" class="btn btn-primary">Update Info</button>
                                <label for=""><?php echo $wrong_pass; ?></label>
                              </form>
                        </div>
                    </section>

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