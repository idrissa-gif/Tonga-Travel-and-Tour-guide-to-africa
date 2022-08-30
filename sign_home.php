<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- bootstrap css link -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css"> 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    
</head>
<body>
  
  <!-- header section start -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">TONGA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Activities
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Hiking</a></li>
              <li><a class="dropdown-item" href="#">Tour</a></li>
              <li><a class="dropdown-item" href="#">Scuba diving</a></li>
              <li><a class="dropdown-item" href="#">Camping</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Destinations
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">South Africa</a></li>
              <li><a class="dropdown-item" href="#">Rwanda</a></li>
              <li><a class="dropdown-item" href="#">Egypt</a></li>
              <li><a class="dropdown-item" href="#">Cameroon</a></li>
              <li><a class="dropdown-item" href="#">Mali</a></li>
              <li><a class="dropdown-item" href="#">Mauritius</a></li>
              <li><a class="dropdown-item" href="#">Tanzania</a></li>
              <li><a class="dropdown-item" href="#">Uganda</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="book.php">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="book.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact_us.php">Contact us</a>
          </li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item"><a href="login.php" class="nav-link link-dark px-2">Login</a></li>
          <li class="nav-item"><a href="sigin_up.php" class="nav-link link-dark px-2">Sign up</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- header section end -->

  <!-- body conatain -->
  <div class="container">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="/images/home-slide-1.png"></div>
        <div class="swiper-slide"><img src="/images/home-slide-2.png"></div>
        <div class="swiper-slide"><img src="/images/home-slide-3.png"></div>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </div>


  <!-- end of body contain -->
  
  <!-- footer session start  -->
  <section class="footer">
      <div class="box-container">
          
          <div class="box">
              <h3>Extra links</h3>
              <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
              <a href="#"><i class="fas fa-angle-right"></i> About us</a>
              <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
              <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
          </div>
          <div class="box">
              <h3>contact info</h3>
              <a href="#"><i class="fas fa-phone"></i> +880 1612618109</a>
              <a href="#"><i class="fas fa-envelope"></i> Idrissa@iut-dhaka.edu</a>
              <a href="#"><i class="fas fa-envelope"></i> shalayuy@iut-dhaka.edu</a>
              <a href="#"><i class="fas fa-map"></i> Dhaka, Bangladesh</a>
          </div>
          <div class="box"> 
              <h3>Follow us</h3>
              <a href="#"><i class="fab fa-facebook"></i> facebook</a>
              <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
              <a href="#"><i class="fab fa-twitter"></i> twitter</a>
              <a href="#"><i class="fab fa-instagram"></i> instagram</a>
          </div>
      </div>
      <div class="credit">
              created by <span>Idrissa & Nabil</span> | All right reversed!
      </div>
      
  </section>
  <!-- footer session end -->
  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- custom js file js -->
  <script src="js/script.js"></script>
  <!-- script for bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      loop: true,
      autoplay:{
        delay: 3000,
        disableOnInteration: false,
      },
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable:true,
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      // And if we need scrollbar
      // scrollbar: {
      //   el: '.swiper-scrollbar',
      // },
    });
  </script>
    
</body>
</html>
