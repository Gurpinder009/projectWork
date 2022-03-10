function menu(){
    let x = document.documentElement.style;
    if(document.querySelector("#drawer").offsetWidth !==0 ){
        x.setProperty("--width-drawer","0em");
    }else{
        x.setProperty("--width-drawer","15em");
    }
  
}