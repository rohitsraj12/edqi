<?php

if(isset($_POST['submit_soon'])){
    $user_email = $_POST['email'];

    $to_dev = "rohitwebco@gmail.com";
    $to = "info@edqi.in";
    
    $subject    = "Coming Soon From | EDQI.com";

    $message    = "<h4>Coming soon page form</h4></br>";
    $message    .= "<p>email: <strong>". $user_email ."</strong></p></br>";
    $message    .= "<p>Thank you,</p>";

    $headers    = "From: <" . $user_email . ">\r\n";
    $headers    .= "Reply-To: " . $user_email . "\r\n";
    $headers    .= "Content-type: text/html\r\n";

    mail($to_dev, $subject, $message, $headers);
    mail($to, $subject, $message, $headers);

    // Redirect to thank you page
    header('Location:index.html');
}