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
      $mail->Password   = '';                               //SMTP password
      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->SMTPSecure = 'tls';
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('tongoagency@gmail.com',$get_name);
      $mail->addAddress($get_email);
  
      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Reset Password Notification';
      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
if(array_key_exists('submit',$_POST))
{
  $email = $_POST['email'];
  $token = md5(rand());
  $query =  "SELECT * from users where email = '$email' LIMIT 1";
  $chek_email = mysqli_query($con,$query);
  
  if(mysqli_num_rows($chek_email)>0)
  {
    $row = mysqli_fetch_row($chek_email);
    $get_name = $row['user_name'];
    $get_email = $row['email'];
    $updated_token_query = "UPDATE users SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1";
    echo "<script> alert($email);</script>";
    $updated_token = mysqli_query($con , $updated_token_query);
    echo "<script> alert('Hello2');</script>";
    if($updated_token)
    {
      send_password_reset($get_name,$get_name,$token);
      $_SESSION['status'] = "We emailed you a password reset link";
      header("Location: reset_password.html");
      exit(0);
      
    }
  }
  else 
  {
    echo "<script> alert('Passwords does not Match')
    window.location.replace('forgetPassword.html'); </script>";
  }
}

?>
