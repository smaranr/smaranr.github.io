<?php

    

if($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['message'] == ''):
  return "error";
endif;

if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):

      // Receiver email address (Change it to your Email ID)
//  $to = 'smarkmediaworks@gmail.com';
  $to = 'smarkmediaworks@gmail.com';

      // prepare header
$header = 'From: '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
$header .= 'Reply-To:  '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
      // $header .= 'Cc:  ' . 'smarkmediaworks@gmail.com' . "\r\n";
      // $header .= 'Bcc:  ' . 'smarkmediaworks@gmail.com' . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();

      // Contact subject
$subject = "Email Form Foody HTML5 Template";

      // Contact Message
$message .= 'Name: ' . $_REQUEST['name'] . "\n";
$message .= 'Email: ' . $_REQUEST['email'] . "\n";
$message .= 'Message: '. $_REQUEST['message'];

      // Send contact information
$mail = smarkmediaworks@gmail.com( $to, $url , $message, $header );

return $mail ? "success" : "error";
else:
  return "error";
endif;
?>