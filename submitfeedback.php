<?php
require_once('dbconnect.php');
$name = mysqli_real_escape_string($connection, $_GET['name']);
$email = mysqli_real_escape_string($connection,$_GET['email']);
$feedback = mysqli_real_escape_string($connection,$_GET['feedback']);
$my_query = "";
echo "<br>";

$my_query = "INSERT INTO Feedback(Name, Email, suggestion) VALUES ('$name','$email','$feedback')";
    echo "<br>";
$result= mysqli_query($connection, $my_query);
    if($result){
        echo"Thank you for the feedback!";        
    }
    else{
        echo"No way";   
    }
?>