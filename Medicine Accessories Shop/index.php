<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Medical Accessories Shop</title>
    <link rel='icon' href = 'images/icon.png' />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link type="text/css" rel="stylesheet" href="css/homestyle.css" />
</head>
<body>
  <div class="container1">
    <div class="img-col">
      <img src="images/logo.png" alt=""/>
    </div>
    <div class="header">
      <h1>Medical Accessories Shop</h1>
    </div>
    <div class="text-col">
      <h5><a href="loginsignup.php">Login/Sign Up</a></h5>
    </div>
  </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Your Health Above Anything</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Trust Us With Your Life</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner3.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>We Are On The Side Of Humanity</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;" >
              <div class="inner">
                <img src="images/AboutUs.png" class="card-img-top" alt="card image">
              </div>
                <div class="card-body">
                     <h1 class="card-title">About Us</h1>
                     <p class="card-text">Try to know more about our journey towards the target to help to grow humanity on this planet.</p>
                     <a href="aboutus.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              <div class="inner">
                <img src="images/teamicon.png" class="card-img-top" alt="card image">
              </div>
                <div class="card-body">
                     <h1 class="card-title">Team Page</h1>
                     <p class="card-text">More information about the developers!</p>
                     <a href="team.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              <div class="inner">
                <img src="images/contactus.png" class="card-img-top" alt="card image">
              </div>
                <div class="card-body">
                     <h1 class="card-title">Contact Us</h1>
                     <p class="card-text">We're always here to answer all your queries</p>
                     <a href="contact.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              <div class="inner">
                <img src="images/products.png" class="card-img-top" alt="card image">
              </div>
                <div class="card-body">
                     <h1 class="card-title">Our Products</h1>
                     <p class="card-text">Grab all your necessities to maintain a healthy life</p>
                     <a href="product.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>