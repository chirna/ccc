<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    if($name=='' || $email=='' || $number=='' ||$message==''){
        echo "<script>alert('All Field are Required !')</script>";
    }
    else{

        $to     = "chiranaepa@gmail.com";   //where you want to get mail
        $subject = "Contact Form";

        $header  = "From: $email";

        $message = " Name : ". $name . "\n Email : ". $email . "\n Number : ". $number ."\n Message : ". $message;

        $sendmail = mail($to, $subject, $message, $header);

        //popup message
        echo "<script>alert('Thank you for Contact Us')</script>";
        // redirect to thank you page
        echo "<script>window.location.href = 'thankyou.html';</script>";

        }
}
?>