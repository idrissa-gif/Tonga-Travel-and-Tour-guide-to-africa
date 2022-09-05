<?php
//include("connection.php");
include("function.php");
print_r($_POST);
// if(array_key_exists('r_submit',$_POST))
// {
//   if($_SERVER['REQUEST_METHOD']=='POST')
//   {
//     $user_name = $_POST['r_name']+' '+$_POST['r_username'];
//     $email = $_POST['r_email'];
//     $password = $_POST['r_password'];
//     $conform_password = $_POST['r_conform_password'];
  
//     if(!empty($user_name)&&!empty($password))
//     {
      
//       $query = "insert into users (user_name,email,password) values('$user_name','$email','$password')";
//       mysqli_query($mysqli,$query);

//       header("Location: about.php");
//       die;

//     }
//     else {
//       echo "please entre some valid data";
//     }
//   }
// }else if(array_key_exists('submit',$_POST))
// {
// }
?>