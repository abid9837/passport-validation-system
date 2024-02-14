<?php
session_start();
include("./conn.inc.php");


$english_select = "";
$spanish_select = "";
if(isset($_SESSION['selected_language'])){
    $language = $_SESSION['selected_language'];
    //         if language == ENGLISH            ////////////////////////////////////////////////
    if($language=='english'){
        $english_select = "selected";

        $lang_sql = "SELECT * FROM `website_languages` WHERE languages='english' ";  //english
        $lang_query = mysqli_query($conn, $lang_sql);
        $lang_num_rows = mysqli_num_rows($lang_query);
        $lang_data = mysqli_fetch_assoc($lang_query);

    }
    //         if language == SPANISH            ////////////////////////////////////////////////
    if($language=='spanish'){
        $spanish_select = "selected";

        $lang_sql = "SELECT * FROM `website_languages` WHERE languages='spanish' ";  //spanish 
        $lang_query = mysqli_query($conn, $lang_sql);
        $lang_num_rows = mysqli_num_rows($lang_query);
        $lang_data = mysqli_fetch_assoc($lang_query);

    }
}else{
    // DEFAULT LANGUAGE
    $english_select = "selected";

    $lang_sql = "SELECT * FROM `website_languages` WHERE languages='english' ";  //english
    $lang_query = mysqli_query($conn, $lang_sql);
    $lang_num_rows = mysqli_num_rows($lang_query);
    $lang_data = mysqli_fetch_assoc($lang_query);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $lang_data['website_title'] ?>  </title>
    <link rel="stylesheet" href="./asset/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="./asset/img/icon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body onload="create_captcha()">
    <!-- alert -->
    <div id="varification_message">
        <p>
            <span id="data_found_or_not"></span>
            <svg id="rotate_success_svg" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z"/></svg>
        </p>
    </div>
    <!-- alert -->


    <!-- header 1 -->
    <header id="header_1">
        
        <div class="header_1_iiner_div">
            <a href="./"><img src="./asset/img/icon 1.jpg" alt=""></a>
            <div>
                <p>
                    <?php echo $lang_data['header_1_text'] ?> 
                </p>
                <div id="under_div_two_color">
                    <div style="width: 35%; height: 100%; background-color: red"></div>
                    <div style="width: 65%; height: 100%; background-color: var(--main-colr);"></div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- header 2  -->
    <header id="header_2">
        <div id="header_2_inner">
            <a href="./"><p> <?php echo $lang_data['nav_item_1'] ?> </p></a>
            <form action="">
                <select class="form-select" onchange="languaage_select()" name="" id="Select_language">
                    <option <?php echo $english_select; ?> value="english">English</option>
                    <option  <?php echo $spanish_select; ?> value="spanish">Spanish</option>
                </select>
            </form>
            <!-- <div id="google_translate_element"></div> -->
        </div>
        
    </header>





    
    <!-- body_section -->
    <section id="section_1">   
        <?php
            if (empty($_GET)){
                include("./index.form.php");
            }
            if(isset($_GET['axd'])){
                $get_data = $_GET['axd'];
            }

            if ( isset($_GET['axd']) && $_GET['axd']=='b25saW5lX3ZhcmlmaWNhdGlvbj0x' ){
                include("./show.data.php");
            }
        ?>
    </section>


    <footer id="footer_1">
        <div id="footer_1_inner">
                
            <!--  -->
            <dev id="middle">
                <div id="left">
                    <div style="width: 35%; height: 100%; background-color: red"></div>
                    <div style="width: 65%; height: 100%; background-color: var(--main-colr);"></div>
                </div>
                <div id="footer_1_inner_middle_jfhj">
                    <h1> <?php echo $lang_data['footer_p_1'] ?> </h1>
                    <p>
                        <span><?php echo $lang_data['footer_p_2'] ?></span>
                        <span><?php echo $lang_data['footer_p_3'] ?></span>
                        <span><?php echo $lang_data['footer_p_4'] ?></span>
                    </p>
                </div>
            </dev>
            <!--  -->
            <dev id="right">
                <img src="http://localhost/passport%20validation%20system/asset/img/icon%202.jpg" alt="">
            </dev>
        </div>
    </footer>

    <!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->


    <script src="./asset/js/captcha.js"></script>
    <script src="./asset/js/ajax.req.js"></script>
    <script src="./asset/js/language.js"></script>    
    

</body>
</html>
