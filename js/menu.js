var main = document.getElementById("main_menu");
var hamburger = document.getElementById("hamburger");
var cancel = document.getElementById("cancel");
var nav = document.getElementById("nav");
hamburger.onclick = function(){
    main.style.display = "block";
    hamburger.style.display = "none";
    nav.style.background = "transparent";
}
cancel.onclick = function(){
    main.style.display = "none";
    hamburger.style.display = "block";
    nav.style.background = "rgba(0,0,0,0.7)";
}
