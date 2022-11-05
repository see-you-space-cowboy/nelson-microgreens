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