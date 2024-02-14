<?php
include("conn.inc.php");

$ID_encode = $_GET['sdf'];
$ID = base64_decode($ID_encode);
// echo $ID;

$sql_show_data = "SELECT * FROM `passposrt_users_info` WHERE id='$ID'";
$query_show_data = mysqli_query($conn, $sql_show_data);
$num_rows_show_data = mysqli_num_rows($query_show_data);
$fetch_assoc_show_data = mysqli_fetch_assoc($query_show_data);

?>


<div class="show_data_out_put_main_div">
    <div class="show_data_out_put_main_div_inner">
        
        <!-- doccument  valid-->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_1'] ?> </h2> 
            <h3> <?php echo $fetch_assoc_show_data['validity']; ?> </h3>
        </div>

        <!-- consulate -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_6'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['consulate']; ?> </h3>
        </div>

        <!-- aplication date -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_5'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['aplication_date']; ?> </h3>
        </div>

        <!-- days_stay -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_8'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['days_stay']; ?> </h3>
        </div>

        <!-- user name -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_7'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['name_of_owner']; ?> </h3>
        </div>

        <!-- passport number -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_2'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['passport_number']; ?> </h3>
        </div>

        <!-- request_number -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_3'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['request_number']; ?> </h3>
        </div>
        
        <!-- country -->
        <div class="show_data_table_container">
            <h2><?php echo $lang_data['Out_put_field_4'] ?></h2>
            <h3> <?php echo $fetch_assoc_show_data['country']; ?> </h3>
        </div>





        

        

        <!-- type_of_procedure -->
        <div class="show_data_table_container">
            <h2> <?php echo $lang_data['Out_put_field_9'] ?> </h2>
            <h3> <?php echo $fetch_assoc_show_data['type_of_procedure']; ?> </h3>
        </div>




    </div>
</div>





