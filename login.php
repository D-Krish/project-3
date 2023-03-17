<?php

    include("Connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email3 = $_POST['email2'];
        $Password_ = $_POST['Password_'];

        if(!empty($email3) && !empty($password)){
            //allow the user info with inputs in both fields
            $query = "SELECT Password_ FROM `finaltest` where email2='$email3' ";

            if($result = mysqli_query($connection, $query)){
                $dbPassword = mysqli_fetch_assoc($result);
                if($dbPassword['Password_'] == $password ){
                    echo"YOU ARE LOGGED IN!";
                }
                else{
                    echo"WRONG USERNAME OR PASSWORD!";
                }
            }
        }
        else{
            echo"EMPTY USER EMAIL OR PASSWORD";
        }

    }


?>