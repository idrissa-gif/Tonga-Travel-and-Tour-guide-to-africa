<?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass ="";
$dbname = "Tonga_travel_db";

/* You should enable error reporting for mysqli before attempting to make a connection */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

//$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

/* Set the desired charset after establishing a connection */
$mysqli->set_charset('utf8mb4');

printf("Success... %s\n", $mysqli->host_info);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

