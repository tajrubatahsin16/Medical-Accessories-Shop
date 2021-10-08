<!DOCTYPE html>
<link

rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php



include ("functions/teamfunctions.php");




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Medical Accessories Shop</title>
    <link rel='icon' href = 'images/icon.png' />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/team.css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


<style>

body{

    background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(admin_area/teambg.jpg);
    background-size:cover;
    background-attachment: fixed;
    background-position:center;
 
}



</style>


</head>
<body>



<div class="content_wrapper">

<h1 class="animate__animated  animate__zoomIn"> TEAM PAGE</h1>
<div id="content_area">

<div id="card_box">

<?php    getTeam();       ?>
      
</div>

</div>

</div>
  </div>





</body>
</html>