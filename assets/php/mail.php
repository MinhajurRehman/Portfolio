<?php
if(empty($_POST["submit"]))
{
 $name = $_POST["name"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];
 $toemai = $_POST["minhajurrehman42069@gmail.com"];

 $emailHeaders = "name :". $name . 
 "\r\n email :". $email . 
 "\r\n phone :" . $phone .
 "\r\n message :" . $message . "\r\n";

 if(mail($toemai , $name , $emailHeaders)){
    $message = "Your msg is received successfully";
 }

}


?>