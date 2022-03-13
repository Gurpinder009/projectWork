function menu(){
    let x = document.documentElement.style;
    if(document.querySelector("#drawer").offsetWidth !==0 ){
        x.setProperty("--width-drawer","0em");
    }else{
        x.setProperty("--width-drawer","15em");
    }
  
}

function toggle_password_visibility(){
    let x = document.getElementById('password');

    (x.getAttribute("type") === "password")?x.setAttribute("type","text"):x.setAttribute("type","password");
}