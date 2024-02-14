






function form_submit_validation(){
    event.preventDefault();
    var rand_captha = jQuery('#captcha_show_box').html();
    var user_input_captcha = jQuery('#user_input_captcha').val();
    // input fields data
    var Passport_number = jQuery('#Passport_number').val();
    var Request_Number = jQuery('#Request_Number').val();
    var Country = jQuery('#Country').val();

    
    if(rand_captha==user_input_captcha){
        jQuery('#user_input_captcha').css("border", "none");
        $.ajax({
            type: "POST",
            url: "http://localhost/passport%20validation%20system/asset/ajax.php/show.data.ajax.php",
            data: {
                Passport_number:Passport_number,
                Request_Number:Request_Number,
                Country:Country
            },
            success: function (response) {
                // if(response==1){
                //     jQuery('#varification_message').css("display", "block");
                //     jQuery('#varification_message').css("display", "flex");
                //     $("#data_found_or_not").html("Data Found");

                //     captcha_refresh();
                //     setInterval(function() {
                        
                //         includer_php();
                        
                //     }, 2000);
                    
                // }
                if(response==1){ // data not found
                    jQuery('#varification_message').css("display", "block");
                    jQuery('#varification_message').css("display", "flex");
                    $("#data_found_or_not").html("Data Not Found");
                    
                    captcha_refresh();
                    setInterval(function() {
                        jQuery('#varification_message').css("display", "none");
                    }, 1000);  
                }else{ // data found
                    jQuery('#varification_message').css("display", "block");
                    jQuery('#varification_message').css("display", "flex");
                    $("#data_found_or_not").html("Data Found");

                    captcha_refresh();
                    setInterval(function() {
                        
                        includer_php(response);
                        
                    }, 2000);
                }
            }
        });
        
    }else{
        jQuery('#user_input_captcha').val("");
        jQuery('#user_input_captcha').css("border", "2px solid red");
        create_captcha();
    }
}



function includer_php(ID){
    const text = "online_varification=1";
    const encodedText = btoa(text); 
    const decodedText = atob(encodedText); 

    const ID_Encode = btoa(ID); 
    window.location.replace("?axd="+encodedText+"&sdf="+ID_Encode);
}
