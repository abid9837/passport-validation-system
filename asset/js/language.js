

function languaage_select(){ 
    var Language = jQuery('#Select_language').val();
    window.location.replace("http://localhost/passport%20validation%20system/asset/ajax.php/language.make.session.php/?language="+Language);
    
}