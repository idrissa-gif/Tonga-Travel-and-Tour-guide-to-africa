<?php
$messagecheck = false;
if(isset($_POST['email']))
{

    $userName = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "idrissa@iut-dhaka.edu";
    $body = "";
    $body .= "From: ".$userName."\r\n";
    $body .= "Email: ".$email."\r\n";
    $body .= "Message: ".$message."\r\n"; 
    
    mail($to,$subject,$body);
    $messagecheck =  true;
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
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
        </div>
      </div>
    </nav>
    <!-- header section end -->


    <!-- body section start -->
    <div class="heading" style="background: url(/images/header-bg-2.png);">Contact us</div>
    <form action = "#" class="form" method="POST" >
        
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="name" 
          name = "name" tabindex = "1" required>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" 
            name="subject"  tabindex = "2" id="subject" placeholder="subject">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="emailId" 
          name = "email" tabindex = "3" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" colums="4" 
          name="message" tabindex = "4" placeholder="Write your message" required></textarea>
        </div>
        <div class = "div-btn">
            <button type="submit" class="btn btn-primary" >Send Message!</button>
        </div>
        <?php
        if($messagecheck):
        ?>
        <div class = "check" >
            <h3>The message is successfully send!</h3>
        </div>
        <?php
        else:
        ?>
        <div class="check">
            <h3>The message failed!</h3>
        </div>
        <?php
        endif;
        ?>
    </form>
    <!-- body section end  -->










    <!-- footer session start  -->
    <section class="footer">
        <div class="box-container">
            
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

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
</body>
</html>
