
/*
slideshow
*/
let images = ['images/slideshow1.jpg','images/slideshow2.jpg','images/slideshow3.jpg'];
let i =0;
function slideShow() {
    document.getElementById("slide").src=images[i];

    if(i<images.length-1){
        i++;
    }
    else {
        i=0;
}

setTimeout("slideShow()", 3000);
}

window.onload = slideShow;

/*
navbar
*/

const menu = document.querySelector(".list");
const menuItems = document.querySelectorAll(".bar");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach( 
  function(menuItem) { 
    menuItem.addEventListener("click", toggleMenu);
  }
)

window.addEventListener("DOMContentLoaded", () => {
  // (A) GET ALL IMAGES
  var all = document.querySelectorAll(".gallery img");
 
  // (B) CLICK ON IMAGE TO TOGGLE FULLSCREEN
  if (all.length>0) { for (let img of all) {
    img.onclick = () => { img.classList.toggle("full"); };
  }}
});