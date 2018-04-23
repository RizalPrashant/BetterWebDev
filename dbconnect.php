<?php

$host = 'us-cdbr-iron-east-05.cleardb.net';
$username = 'b80d301cc07f2c';
$password = 'fe97d40b';
$database_name = 'heroku_1df754e7a200ea0';

$connection = mysqli_connect($host, $username, $password, $database_name);
if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;
?>
