<?php
session_start();
require_once('dbconnect.php');

//prepared statements
$stmt = $connection->prepare("INSERT INTO User(Username, Password) VALUES (?,?)");
$stmt->bind_param("ss",$uname,$password);

$uname = mysqli_real_escape_string($connection, $_GET['uname']);
$password = mysqli_real_escape_string($connection, $_GET['password']);
$password = md5($password);
//generates a random salt with the function so its safe
//$password = password_hash($password, PASSWORD_DEFAULT);

echo "<br>";

$my_query = "";
$my_query = "select * from User where Username = '$uname'";

$result= mysqli_query($connection, $my_query);
if(mysqli_num_rows($result) > 0){
    
//     $_SESSION['errors'] = array("Username already taken");
header("Location:recreate.html");
    //echo "Sorry! Username already in use please choose a new one";
}
else
{
    
    $stmt->execute();
    $_SESSION['happy'] = array("Account Creation Success");
        header("Location: index.php #redirectthis"  ); 
    //echo "Created";
    $stmt->close();

//    $my_query = "INSERT INTO User(Username, Password) VALUES ('$uname','$password')";
//    echo "<br";
//    $result= mysqli_query($connection, $my_query);
//    if($result){
//        echo "Account Created";
//        
//    }
//    else{
//        echo"Error found cannot create account.";
//    }
}
?>