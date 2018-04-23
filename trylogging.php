<?php
session_start();
require_once('dbconnect.php');    
$uname = mysqli_real_escape_string($connection, $_GET['uname']);
$password = mysqli_real_escape_string($connection,$_GET['password']);
//$salt = 'thisisrandom';
$password = md5($password);
//generates a random salt with the function so its safe
//$password = password_hash($password, PASSWORD_DEFAULT);

echo "<br>";

$my_query = "";
$my_query = "select * from User where Username = '$uname' and Password = '$password'";

$result= mysqli_query($connection, $my_query);
if(mysqli_num_rows($result) > 0){
    $_SESSION["uname"] = $uname;
    header("Location: home.php"); 
    exit();
}
else{
    echo "Incorrect Username or Password. Please try again";
}
if(isset($_GET['logout'])){
    session_unregister("uname");
    //header("Location: login.php");
}
?>