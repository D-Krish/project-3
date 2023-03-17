<?php
    include("Connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fName= $_POST['f_Name'];
        $lName= $_POST['l_Name'];
        $email3= $_POST['email_3'];
        $Password_= $_POST['_password'];

        $insertQuery = " INSERT INTO `finaltest`( `f_Name`, `l_Name`, `email_3` ,`_password`) VALUES 
        ('$fName','$lName','$email3' ,'$Password_')";
    

       if(mysqli_query($connection,$insertQuery)) 
            {echo "
            <script>
                alert('Recorded!');
            </script>";}
        // echo = recorded successfully
        

        else{
            echo "
            <script>
                alert('The Information was not recorded!');
            </script>";
            // echo " Process Failed!";
        }
    }
    

?>