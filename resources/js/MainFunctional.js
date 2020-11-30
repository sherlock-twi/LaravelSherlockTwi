let menu = document.getElementById("menu");
let MobileMenu = document.getElementById("MobileMenu");
let body = document.getElementById("body");
let closemenu = document.getElementById("closemenu");
let OnOff = false;
let othermbut = document.getElementById("othermbut");
let oth = document.getElementById("oth");
let onoroff = false;

MobileMenu.onclick = function(){OpenMobileMenu();}
closemenu.onclick = function(){OpenMobileMenu();}
othermbut.onclick = function(){
    if(onoroff == false){oth.style.display = "block"; onoroff = true}
    else{oth.style.display = "none"; onoroff = false}
}

function OpenMobileMenu(){
    if(OnOff == false){
        OnOff = true;
        MobileMenu.style.transform = "rotate(-270deg)";
        menu.style.right = "0px";
    }
    else{
        OnOff = false;
        MobileMenu.style.transform = "rotate(0deg)";
        menu.style.right = "-400px";
    }
}
