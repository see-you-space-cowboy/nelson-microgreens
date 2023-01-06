<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nelson Microgreens</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
       <header class="page-header">
        <div class="banner-box">
        <img
        class="banner"
        srcset="images/banner-maxwidth.jpg 1920w, images/banner-768px.jpg 768w"
        sizes="(max-width:768px) 768px, 1920px"
        src="images/banner-maxwidth.jpg" 
        alt="A banner image of 6 different microgreens that sits behind the logo and navigation bar">
        </div>
        <div class="logobg"></div>
        <a href="index.html"><img class="logo"
            srcset="images/logo-48pxheight.png 98w, images/logo-maxheight.png 232w"
            sizes="(max-width:768px) 98px, 232px"
            src="images/logo-maxheight.png"
            alt="Nelson Microgreens, nelson is above microgreens and a sprout with 2 leaves is coming from the r and l"></a>
            <div class="navbg">
                    <nav class="navbar">
                        <ol class="list">
                            <li class="bar"><a href="index.html">Home</a></li>
                            <li class="bar"><a href="Photos.html">Photos</a></li>
                            <li class="bar"><a href="About.html">About</a></li>
                            <li class="bar"><a href="Order.html">Order</a></li>
                        </ol>
                    </nav>
                        <button class="hamburger">
                            <i class="menuIcon material-symbols-outlined">menu</i>
                            <i class="closeIcon material-symbols-outlined">close</i>
                        </button>
            </div>
        </header>
    <div class="main-content">
        <h2>Photo Gallery</h2>
        <div class="para2"><p>photos</p></div> 
        
        <div class="gallery">
        <?php
        // GET IMAGES IN GALLERY FOLDER
        $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR ;
        $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}" , GLOB_BRACE);
        
        // SORT IMAGES BY NEWEST FIRST
        usort($images, function ($file1, $file2) {
        return filemtime($file2) <=> filemtime($file1); 
        });
        ?>

        <?php
        // OUTPUT IMAGES
        foreach ($images as $i) {
            printf("<img src='gallery/%s'>", rawurlencode(basename($i)));
        }
        ?></div>

    </div>
    </body>
    <script src="scripts/script.js"></script>
    </html>