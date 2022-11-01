<?php
include("connection.php");
include("function.php");

if (array_key_exists('submit', $_POST)) {
    $FullName = $_POST['FullName'];
    $email = $_POST["email"];
    $Phone = $_POST["Phone"];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $destination = $_POST['destination'];
    $date = $_POST['book_date'];
    // echo $FullName . ' ' . $email . ' ' . $Phone . ' ' . $adults . ' ' . $children . ' ' . $destination . ' ' . $date;

    $query = "INSERT INTO `BookTable`(`destination`, `start_date`, `FullName`, `email`, `Phone`, `adults`, `children`) VALUES ('$destination','$date','$FullName','$email','$Phone','$adults','$children')";
    if (!$con->query($query)) {
        echo ("Error description: " . $con->error);
    }

    echo "<script> alert('You have got a Free Quote')
        window.location.replace('SouthAfricaTours.html'); </script>";
} else {
    echo "<script> alert('Failed to get a Free Quote')
        window.location.replace('SouthAfricaTours.html'); </script>";
}
