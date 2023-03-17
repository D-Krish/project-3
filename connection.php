<?php

//connection to the Database
$dbhost = "localhost";
$dbuser = "Kd";
$dbpass = "12345";
$dbname = "sjtutor";

if($connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

   echo 'connected';
}
else{
    die("failed to connect!");
}

?>