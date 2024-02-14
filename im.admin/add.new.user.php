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
    <style>
        #add_new_user_section_main_container_inner{
            margin-bottom: 40px;
        }
    </style>

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
                <div  class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 id="jfgj" class="h3 mb-0 text-gray-800">Add New user</h1>
                    </div>


                    <!-- /////////////////////////////////////////////// -->

                    <!-- add new user section -->
                    <section id="add_new_user_section_main_container">
                        <!-- /////////////////////////////////////////////// -->
                        <div id="success_allert_insert">
                            <p > <span id="success_message_or_error">Successfully Add Data</span></p>
                        </div>
                        <!-- //////////////////////////////////////// -->
                        <div id="add_new_user_section_main_container_inner">
                            <form onsubmit="admin_user_add();">
                                <!-- user_name -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Aplication Date</label>
                                    <input type="date" class="form-control" id="Aplication_Date" aria-describedby="emailHelp">
                                </div>

                                <!-- user_phone_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Passport Number</label>
                                    <input type="text" class="form-control" id="Passport_Number" aria-describedby="emailHelp">
                                </div>

                                <!-- user_email -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Request Number</label>
                                    <input type="text" class="form-control" id="Request_Number" aria-describedby="emailHelp">
                                </div>
                                
                                <!-- user_country -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Country Nationality</label>
                                    <!-- <input  type="text" class="form-control" id="Country"> -->
                                    <select name="Country" id="user_country" class="form-control">
                                        <option value="Antartida">Antartida</option>
                                        <option value="Afganistan">Afganistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Alemania">Alemania</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                        <option value="Antillas Holandesas">Antillas Holandesas</option>
                                        <option value="Apatridas, Asilados y Refugiados">Apatridas, Asilados y Refugiados</option>
                                        <option value="Arabia Saudita">Arabia Saudita</option>
                                        <option value="Argelia">Argelia</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaiyan">Azerbaiyan</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrein">Bahrein</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belgica">Belgica</option>
                                        <option value="Belice">Belice</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia  y Herzegovina">Bosnia  y Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="CROACIA">CROACIA</option>
                                        <option value="Cabo Verde">Cabo Verde</option>
                                        <option value="Camboya">Camboya</option>
                                        <option value="Camerun">Camerun</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="China - Hong Kong">China - Hong Kong</option>
                                        <option value="China - Macao">China - Macao</option>
                                        <option value="Chipre">Chipre</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Congo(Brazzaville)">Congo(Brazzaville)</option>
                                        <option value="Corea Del Norte">Corea Del Norte</option>
                                        <option value="Corea Del Sur">Corea Del Sur</option>
                                        <option value="Costa De Marfil">Costa De Marfil</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Dinamarca">Dinamarca</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="ESUATINI">ESUATINI</option>
                                        <option value="ETIOPIA">ETIOPIA</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egipto">Egipto</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Emiratos Arabes Unidos">Emiratos Arabes Unidos</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Eslovaquia">Eslovaquia</option>
                                        <option value="Eslovenia">Eslovenia</option>
                                        <option value="Espa&#241;a">Espa&#241;a</option>
                                        <option value="Estados Unidos de America">Estados Unidos de America</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Federaci&#243;n Rusa">Federaci&#243;n Rusa</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Filipinas">Filipinas</option>
                                        <option value="Finlandia">Finlandia</option>
                                        <option value="Francia">Francia</option>
                                        <option value="GUYANA">GUYANA</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Granada">Granada</option>
                                        <option value="Grecia">Grecia</option>
                                        <option value="Groenlandia">Groenlandia</option>
                                        <option value="Guadalupe">Guadalupe</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guayana Francesa">Guayana Francesa</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea Bissau">Guinea Bissau</option>
                                        <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungria">Hungria</option>
                                        <option value="ISLAS COOK">ISLAS COOK</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Inglaterra">Inglaterra</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Irlanda">Irlanda</option>
                                        <option value="Isla Caiman">Isla Caiman</option>
                                        <option value="Isla Johnston">Isla Johnston</option>
                                        <option value="Isla Niue">Isla Niue</option>
                                        <option value="Isla Wake">Isla Wake</option>
                                        <option value="Islandia">Islandia</option>
                                        <option value="Islas Caiman">Islas Caiman</option>
                                        <option value="Islas Comoras">Islas Comoras</option>
                                        <option value="Islas Feroe">Islas Feroe</option>
                                        <option value="Islas Marshall">Islas Marshall</option>
                                        <option value="Islas Salomon Britan.">Islas Salomon Britan.</option>
                                        <option value="Islas Turcas Y Caico">Islas Turcas Y Caico</option>
                                        <option value="Islas Virgenes Britan.">Islas Virgenes Britan.</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italia">Italia</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japon">Japon</option>
                                        <option value="Jordania">Jordania</option>
                                        <option value="KOSOVO">KOSOVO</option>
                                        <option value="Kazajstan">Kazajstan</option>
                                        <option value="Kenia">Kenia</option>
                                        <option value="Kirguistan">Kirguistan</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Letonia (Latvia)">Letonia (Latvia)</option>
                                        <option value="Libano">Libano</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libia">Libia</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lituania">Lituania</option>
                                        <option value="Luxemburgo">Luxemburgo</option>
                                        <option value="MACEDONIA">MACEDONIA</option>
                                        <option value="Macedonia del Norte">Macedonia del Norte</option>
                                        <option value="MICRONESIA">MICRONESIA</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malasia">Malasia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldivas">Maldivas</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marruecos">Marruecos</option>
                                        <option value="Martinica">Martinica</option>
                                        <option value="Mauricio">Mauricio</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar (ex-Birmania)">Myanmar (ex-Birmania)</option>
                                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                                        <option value="Naciones Unidas">Naciones Unidas</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="No definido">No definido</option>
                                        <option value="Noruega">Noruega</option>
                                        <option value="Nueva Caledonia">Nueva Caledonia</option>
                                        <option value="Nueva Zelandia">Nueva Zelandia</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Organizacion Estados Americanos">Organizacion Estados Americanos</option>
                                        <option value="Paises Bajos(Holanda)">Paises Bajos(Holanda)</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestina">Palestina</option>
                                        <option value="Panam&#225;">Panam&#225;</option>
                                        <option value="Papua Nueva Guinea">Papua Nueva Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Polinesia Francesa">Polinesia Francesa</option>
                                        <option value="Polonia">Polonia</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reino Unido">Reino Unido</option>
                                        <option value="Rep. Centro Africana">Rep. Centro Africana</option>
                                        <option value="Rep. Checa">Rep. Checa</option>
                                        <option value="Rep. Dem. Del Congo (Ex-Zaire)">Rep. Dem. Del Congo (Ex-Zaire)</option>
                                        <option value="Rep. Dominicana">Rep. Dominicana</option>
                                        <option value="Reuni&#243;n">Reuni&#243;n</option>
                                        <option value="Rumania">Rumania</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="SIN ESPECIFICAR">SIN ESPECIFICAR</option>
                                        <option value="SIRIA">SIRIA</option>
                                        <option value="SUDAN DEL SUR">SUDAN DEL SUR</option>
                                        <option value="SURINAME">SURINAME</option>
                                        <option value="Sahara Occidental">Sahara Occidental</option>
                                        <option value="Samoa Occidental">Samoa Occidental</option>
                                        <option value="San Cristobal y Nevis">San Cristobal y Nevis</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="San Vicente y Granadina">San Vicente y Granadina</option>
                                        <option value="Santa Lucia">Santa Lucia</option>
                                        <option value="Santa Sede">Santa Sede</option>
                                        <option value="Santo Tome y Principe">Santo Tome y Principe</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leona">Sierra Leona</option>
                                        <option value="Singapur">Singapur</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudafrica">Sudafrica</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suecia">Suecia</option>
                                        <option value="Suiza">Suiza</option>
                                        <option value="Swazilandia">Swazilandia</option>
                                        <option value="TAHITI">TAHITI</option>
                                        <option value="Tailandia">Tailandia</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tanzania, Rep&#250;blica Unida">Tanzania, Rep&#250;blica Unida</option>
                                        <option value="Tayikistan">Tayikistan</option>
                                        <option value="Timor Oriental">Timor Oriental</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                        <option value="Tunez (tunisia)">Tunez (tunisia)</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turquia">Turquia</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Ucrania">Ucrania</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Union Europea">Union Europea</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vaticano (ciudad Del Vaticano)">Vaticano (ciudad Del Vaticano)</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="ZIMBABWE">ZIMBABWE</option>
                                        <option value="Zambia">Zambia</option>
                                
                                    </select>
                                </div>
                                
                                <!-- user_passport_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Name of Owner</label>
                                    <input type="text" class="form-control" id="Name_of_Owner" aria-describedby="emailHelp">
                                </div>
                                
                                <!-- user_request_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Consulate</label>
                                    <input type="text" class="form-control" id="Consulate" aria-describedby="emailHelp">
                                </div>

                                <!-- user_request_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Days Stay (only number)</label>
                                    <input type="number" class="form-control" id="Days_Stay" aria-describedby="emailHelp">
                                </div>

                                <!-- user_request_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Type of Procedure</label>
                                    <input type="text" class="form-control" id="Type_of_Procedure" aria-describedby="emailHelp">
                                </div>
                                
                                <!-- user_request_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Validity</label>
                                    <input type="text" class="form-control" id="Validity" aria-describedby="emailHelp">
                                </div>


                                <!-- user_request_number -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Pasport PDF</label>
                                    <input type="file" class="form-control" id="Passport_pdf" aria-describedby="emailHelp">
                                </div>

                                
                                
                                <!--  -->
                                <button type="submit" class="btn btn-primary">Add User</button>
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
    <script src="./js/admin.user.addd.ajax.js"></script>

</body>

</html>