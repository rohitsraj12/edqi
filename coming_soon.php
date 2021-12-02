<?php

if(isset($_POST['submit_soon'])){
    $email = $_POST['email'];

    $to = "rohitwebco@gmail.com";
    $to1 = "info@edqi.in";
    
    $subject    = "Coming soon page form | EDQI.com";

    $message    = "<h4>Coming soon page form</h4></br>";
    $message    .= "<p>email: <strong>". $email ."</strong></p></br>";
    $message    .= "<p>Thank you,</p>";

    $headers    = "From: <" . $email . ">\r\n";
    $headers    .= "Reply-To: " . $email . "\r\n";
    $headers    .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    mail($to1, $subject, $message, $headers);
    
    // echo $message;

    // Redirect to thank you page
    header('Location:index.html?success');
}