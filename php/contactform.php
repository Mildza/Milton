<?php

if (!isset($_POST['submit'])){
  include 'php/templates/contactform.php';
} else {

  if (!isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message'])){
    $_SESSION['message'] = 'We are sorry, but there appears to be a problem with the form you submitted.';
    include 'php/templates/contactform.php';
  } else {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $to      = 'info@milton-soft.com';
        $subject = 'Kontakt forma - ' . $_POST['subject'];
        $email = $_POST['email'];
         $ip_address = $_SERVER['REMOTE_ADDR'];
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        $message = '<html><head><style>body { font-family: Verdana; font-size: 12px; }</style></head><body>';
        $message .= "New mail from:<br><br>Email: $email <br>IP: $ip_address <br><br>Message:<br>";
        $message .= $_POST['message'] . '</body></html>';

        $sendMail = mail($to, $subject, $message, $headers);
        if($sendMail) {
          $_SESSION['message'] = 'Your message was sent successfully. We’ll get in touch shortly.';
          include 'php/templates/message.php';
        } else {
          $_SESSION['message'] = 'We are sorry, but there appears to be a problem with the form you submitted.';
          include 'php/templates/contactform.php';
        }
    } else {
        $_SESSION['message'] = 'We are sorry, but email address is not a valid email.';
        include 'php/templates/contactform.php';
    }
  }
}
