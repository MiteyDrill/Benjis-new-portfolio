<?php

if(isset($_POST['form-submit'])){

    
    $hidden = $_POST['phone'];


    if(!empty($hidden)){
        //box detected
        header("Location: ../?error");
        exit();
    }


    //process filtering, and then form validation and submission

    $firstname = htmlspecialchars(stripslashes(trim($_POST['firstname'])));
    $lastname = htmlspecialchars(stripslashes(trim($_POST['lastname'])));

    $phone_email = htmlspecialchars(stripslashes(trim($_POST['phone_email'])));
    $web_option = htmlspecialchars(stripslashes(trim($_POST['site'])));    
    $price_option = htmlspecialchars(stripslashes(trim($_POST['price'])));

    $message = htmlspecialchars(stripslashes(trim($_POST['text-area'])));

    //check inputs
    if(empty($firstname) | empty($lastname) |empty($phone_email) |empty($web_option) | empty($price_option) | empty($message)){
        header("Location: ../?error=empty_fields");
        exit();
    }

    //change all this nasty code...

    //this section doesn't seem to work... fix it
    if(strlen($firstname) >= 20){
        header("Location: ../?error=nametoolong");
    }
    if(strlen($lastname) >= 20){
        header("Location: ../?error=ltoolong");
    }
    if(strlen($phone_email) >= 40){
        header("Location: ../?error=etoolong");
    }
    if(strlen($web_option) >= 20){
        header("Location: ../?error=wtoolong");
    }
    if(strlen($price_option) >= 20){
        header("Location: ../?error=ptoolong");
    }
    if(strlen($message) >= 1200){
        header("Location: ../?error=mtoolong");
    }
    
    if(!preg_match("/^[A-Za-z .'-]+$/", $firstname)){
        header("Location: ../?error=invalidfirstname");
        exit();
    }
    if(!preg_match("/^[A-Za-z .'-]+$/", $lastname)){
        header("Location: ../?error=invalidlastname");
        exit();
    }
    if(!preg_match("/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $phone_email)){
        header("Location: ../?error=invalidphoneemail");
        exit();
    }
    if(!preg_match("/^[A-Za-z .'-]+/", $web_option)){
        header("Location: ../?error=invalidweboption");
        exit();
    }
    if(!preg_match("/^[A-Za-z0-9]+/", $price_option)){
        header("Location: ../?error={$price_option}");
        exit();
    }
    if(!preg_match("/^[a-z0-9 .!\-]+$/i", $message)){
        header("Location: ../?error=invalidmessage");
        exit();
    }

    if (!filter_var($phone_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../?error=invalidemail");
        exit();
    }

    if(!empty($hidden)){
        echo "Bot Detected...";
        exit();
    } else {


        //filter 

        $headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

        $headers = "From: " . $firstname . " " . $lastname . "\r\n" . 'Reply-To: ' 
        . $phone_email . "\r\n" . 'x-Mailer: PHP/' . phpversion();

        $subject = $web_option . " price-range: " . $price_option . "00$";

        @mail("localhost", $subject, $message, $headers);

        //message should of been sent...

        header("Location:../?email=success");
        exit();
    }
} else {
    header("Location: ../");
}