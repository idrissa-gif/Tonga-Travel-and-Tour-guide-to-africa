<?php
session_start();
include("connection.php");
include("function.php");

function check_email()
{
    if(array_key_exists('submit',$_POST))
    {
        $email = $_POST["email"];
        if(!empty($email))
        {
            $dbhost = "127.0.0.1";
            $dbuser = "root";
            $dbpass ="";
            $dbname = "Tonga_travel_db";
            
            /* You should enable error reporting for mysqli before attempting to make a connection */
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            $con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

            $check = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");
            if(mysqli_num_rows($check) > 0)
            {
                echo "1";
            }
        }
    }

    echo "0";
}


?>

<script>
    var result = <?php check_email() ?>;

    var btn = document.getElementById('submit');
    btn.addEventListener('click',function (e){
    e.preventDefault();
    var name = document.getElementById('name').value;
    var body = 'name: '+name +'<br/> email: ' + email + '<br/> subject ' + subject + '<br/> message '+ message;
    if(name != "" && email != "" && message != "" && body != "")
    {
        Email.send({
        Host : "smtp.gmail.com",
        SecureToken : "868C1CF83650F7CC0298841D5AE45B33376F",
        Username : "tongaagency@gmail.com",
        Password : "trqqalfoykhtkbzd",
        To : 'tongaagency@gmail.com',
        From : email,
        Subject : subject,
        Body : body
      }).then(
        message => alert("successfully sent")
      );
    }else 
    {
      message=>alert("One of the required field is empty!");
    }
    
    
    })
</script>