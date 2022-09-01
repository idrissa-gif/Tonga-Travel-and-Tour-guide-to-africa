<?php
include("connection.php");
include("function.php");
if(array_key_exists('r_submit',$_GET))
{
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $user_name = $_GET['r_name']+' '+$_GET['r_username'];
    $email = $_GET['r_email'];
    $password = $_GET['r_password'];
    $conform_password = $_GET['r_conform_password'];
  
    if(!empty($user_name)&&!empty($password))
    {

      $user_id = randon_num(100);
      $query = "insert into users (user_id , user_name,email,password) values($user_id,$user_name,$email,$password)";
      mysqli_query($con,$query);

      header("Location: about.php");
      die;

    }
    else {
      echo "please entre some valid data";
    }
  }
}else if(array_key_exists('submit',$_GET))
{
  echo "hello";
}
?>