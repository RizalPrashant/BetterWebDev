<?php
require_once('dbconnect.php');
$name = mysqli_real_escape_string($connection, $_GET['name']);
$email = mysqli_real_escape_string($connection,$_GET['email']);
$feedback = mysqli_real_escape_string($connection,$_GET['feedback']);
$my_query = "";
echo "<br>";
//echo $name;
//echo $email;
//echo $feedback;

$my_query = "INSERT INTO Feedback(Name, Email, suggestion) VALUES ('$name','$email','$feedback')";
    echo "<br>";
//echo"it reaches here too";
$result= mysqli_query($connection, $my_query);
//echo "it reches here as well";
echo $result;
    if($result){
        //echo "Thank you for the feedback";
        header("Location:displayfeedback.php");
    
    }
    else{
        echo"No way";   
    }
?>