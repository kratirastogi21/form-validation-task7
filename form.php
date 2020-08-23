<?php 
if(isset($_POST['submit'])){
    $to = "kratirastogi21@gmail.com"; 
    $from = $_POST['email'];
    $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $location = $_POST['Home location'];
  $address = $_POST['full address'];

    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message ="Name: ".$name."\n"."Email: ".$email."\n"."Contact Number: ".$contact."\n"."Home Location: ".$location."\n"."Address: ".$address; " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    
    }
?>