<?php

//require_once "Mail.php";
if(isset($_POST['dest_mail']))
{
 function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
         if(!isset($_POST['dest_mail']) ||
        !isset($_POST['sub_txt']) 
        ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
$from = "mouhammed.akid@gmail.com";
$to = $_POST['dest_mail'];
$subject = $_POST['sub_txt'];
$body = $_POST['Paragraph'];
 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$to)) {
    $error_message = 'The Email Address you entered does not appear to be valid.<br />';
  }
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "headmaster8912@gmail.com";  //<> give errors
$password = "RedKiller02";

$headers = "From:" .$from;
/*$smtp = Mail::factory('smtp',
    array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));*/

mail($to,$subject,$body, $headers);
echo "Mail Sent";	

if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message successfully sent!</p>");
}
}

?>  <!-- end of php tag-->
/*
 * Created by JetBrains PhpStorm.
 * User: M7mmad
 * Date: 5/1/13
 * Time: 2:34 PM
 * To change this template use File | Settings | File Templates.

 * /