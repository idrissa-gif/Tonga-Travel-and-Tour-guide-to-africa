<?php

session_start();
include("connection.php");
include("function.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name,$get_email,$token)
{
    //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'tongaagency@gmail.com';                     //SMTP username
      $mail->Password   = 'trqqalfoykhtkbzd';                               //SMTP password
      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->SMTPSecure = 'tls';
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('tongoagency@gmail.com','Tonga Travel Agency');
      $mail->addAddress($get_email);
  
      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Reset Password Notification';
      $email_template ="
      <h2><strong>Hello $get_name !</strong></h2><br>
      <h3>You are receiving this email because we received a password reset request for your account.</h3><br><br>
      <a href='http://localhost/travel_and_tour_agent/reset_password.html?token=$token&email=$get_email'>Reset Password!</a>
      ";
      $mail->Body    = $email_template;
    
  
      $mail->send();
      echo "<script> alert('Message has been sent')</script>";
  } catch (Exception $e) {
      echo "<script> alert('Message has not been sent {$mail->ErrorInfo}')</script>";
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
if(array_key_exists('submit',$_POST))
{
  $email = $_POST['email'];
  $token = md5(rand());
  $query =  "SELECT * from users where users.email = '$email' LIMIT 1";
  $chek_email = mysqli_query($con,$query);
  if(mysqli_num_rows($chek_email)>0)
  {
    $row = mysqli_fetch_array($chek_email);
    $get_name = $row['user_name'];
    $get_email = $row['email'];
    $updated_token_query = "UPDATE users SET users.verified_token = '$token' WHERE users.email = '$get_email' LIMIT 1";
    
    $updated_token = mysqli_query($con , $updated_token_query);
    if($updated_token)
    {
      send_password_reset($get_name,$get_email,$token);
      echo "<script> alert('We emailed you a password reset link')
      window.location.replace('forgetPassword.html'); </script>";
      exit(0);
      
    }
    else 
   {
      echo "<script> alert('Token Update failed')
      window.location.replace('forgetPassword.html'); </script>";
   }

  }
  else 
  {
    echo "<script> alert('Passwords does not Match')
    window.location.replace('forgetPassword.html'); </script>";
  }
}

?>
