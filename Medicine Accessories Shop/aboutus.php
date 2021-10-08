<!DOCTYPE html>
<?php


include ("aboutfunctions.php");


?>





<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Accessories Shop</title>
    <link rel='icon' href = 'images/icon.png' />

    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link type="text/css" rel="stylesheet" href="CSS/aboutstyle.css" />
    <style>

.about p{


  font-family: 'Roboto', sans-serif;


}


    </style>
</head>
<body>
    <div class="about-section">
        <a href="index.php"><img src="images/abouthome.png" class="abouthome" /></a>
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
          <?php   getAboutPro();          ?>
            </p>
            <div class="visit">
                <span><a href="https://www.facebook.com/hrida.ahmed.7"><img src="images/fbicon.png" /></a></span>
                <span><a href="https://www.instagram.com/tajruba_tahsin/"><img src="images/instaicon.png" /></a></span>
            </div>
        </div>
    </div>
</body>
</html>