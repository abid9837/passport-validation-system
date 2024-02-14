


function create_captcha(){
    // document.getElementById("captcha_show_box").innerHTML = "ABCDE";
    let chaptcha_char = "ZzX+xCcVvBbN)nMmAa?SsDd$%(FfGgHhJjKkLlQqWwEeR+rTtYyUu?<IiOo-Pp1234509876!@#";
    let captcha="";
    for (let i = 0; i < 5; i++) {
        let captcha_text = chaptcha_char.charAt(Math.floor(Math.random()*chaptcha_char.length));
        captcha = captcha+captcha_text;
        
    }
    setTimeout(() => {
        console.log(captcha);
        document.getElementById("captcha_show_box").innerHTML = captcha;
    
    }, 100);

    

    

    
}


function captcha_refresh(){
    create_captcha();
}

