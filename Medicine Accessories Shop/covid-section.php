<!DOCTYPE html>
<?php



include ("functions/functions.php");
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: loginsignup.php");
}



?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cart.css" media="all">
    <title>Medical Accessories Shop</title>
    <link rel='icon' href = 'images/icon.png' />
     <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

body{
  background: lightblue;
}
.enter h1{
	font-family: Abril Fatface;
    font-weight: 600;
    color: #334756;
}
.enter a{
  font-family: Libre Baskerville;
  font-weight: 400;
}
.enter{
  border: 2px solid black;
  text-align: center;
  animation: animate 1.5s linear infinite;
}
@keyframes animate{
	 0%{
	   opacity: 0;
	 }
	 50%{
	   opacity: 0.7;
	 }
	 100%{
	   opacity: 0;
	 }
   }
   #dangerous{
     color: red;
   }
   #happy{
     color: #334756;
   }



</style>
<body>
  <div class="enter">
    <?php echo "<h1>Welcome " . $_SESSION['user_name'] . "</h1>"; ?>
    <hr>
    <a id="dangerous" href="logout.php">Logout</a>
    <a id="happy" href="profile.php">Update Your Profile</a>
  </div>


</ul>


</div>
<div class="container">
<div id="content_area1">
<nav class="navbar navbar-expand-lg navbar-light  ">


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fas fa-2x fa-bars navbar_icon"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item ">
        <a class="nav-link text-center" href="#">  <?php  procart() ; ?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-center " href="#"><b >Covid Section </b>Total Items:<?php total_items();   ?>Total price:
<?php total_price(); ?></a>
      </li>
    
      <li class="nav-item">
      <a class="nav-link text-center"href="cart.php">Go To Cart</a>
     
      </li>
   
    </ul>
  </div>








  </nav>



<div id="products_box">

<?php
$get_pro="select * from products where   product_cat=10   ";
$run_pro=mysqli_query($conn,$get_pro);
while( $row_pro=mysqli_fetch_array($run_pro))
{
$pro_id= $row_pro['product_id'];
$pro_cat= $row_pro['product_cat'];

$pro_title= $row_pro['product_title'];
$pro_price= $row_pro['product_price'];

$pro_image= $row_pro['product_image'];
echo "

<div id='single_product'>

<h3 class='pic1' >$pro_title</h3>
<img src='$pro_image' width='150' height='150' />
<p><b> BDT $pro_price</b></p>


<a href='details.php? pro_id=$pro_id' style='float:left;'><button style='float:right'class='btn btn-info'>Details</button> </a>



<a href='covid-section.php ?add_cart=$pro_id'><button style='float:right' class='btn btn-info ' >Add to cart </button></a>




</div>
";

}
?>

</div>
</div>

</div>

<!-- Content wrapper ends -->
</div>
</div>
    

<!-- Main Container ends here -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>