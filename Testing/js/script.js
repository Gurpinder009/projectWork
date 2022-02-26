function menu(){
    let x = document.documentElement.style;
    if( document.querySelector("#drawer").offsetWidth !==0  ){
        x.setProperty("--width-drawer","0em");
        document.getElementById("menu").style.display = "inline-block";

    }else{
        document.getElementById("menu").style.display = "none";
        x.setProperty("--width-drawer","15em");
    }

  
}