<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "hello@emilyrosescott.com";
    $subject = "New Form Submission";

    $txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
    $headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
    if($email != NULL) {
        mail($to, $subject, $txt, $headers);
    }
 
// Redirect to
header("Location:index.html");
?>