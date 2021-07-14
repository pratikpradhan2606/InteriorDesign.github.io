<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    include("connection.php");
    $con= mysqli_connect($db_server,$un,$pass,$db);

		if($con->connect_error){
			die("Failed to connect");

		}
        

            $query="INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `msg`) VALUES (NULL,'$name','$email','$subject','$message')";
            $result=$con->query($query);
    
            if (!$result) {
              die("Failed to Connect!!".$con->error);
            }
            else 
            {
              echo "<script>alert('Form Submitted')</script>";            
                include "ContactForm.php";
            }
    
         
    
    

?>