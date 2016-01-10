<!DOCTYPE html>
<html>
<head>
<title>Send Mail Results</title>
</head>
<body>
<?php
  // Set path for the PHPMailer files.  These must have been previously
  // unzipped and placed into the stated directory.  Be sure to match
  // up the directories in your installation (i.e. you do not have to have
  // your files in the same directory that I have here, as long as you can
  // locate them).  To download / install the necessary files, see:
  // https://github.com/Synchro/PHPMailer
  $mailpath = '/Applications/XAMPP/xamppfiles/phpmailer';
  
  // Also note that Windows installations have different path names - be sure
  // to follow the syntax correctly.
  // Also, on my Windows version, to get this to work I had to do the following:
  // 	Edit file 'php.ini'  (you need to find where that is)
  //	Locate the line:  extension=php_openssl.dll
  //	If there is a semicolon (;) at the beginning of the line, delete it
  //	Save the file
  //	Start / restart Apache
  // You may also need to install the "CA Bundle" in order for the certificate
  // from the server to be accepted.  See more information on this issue in the
  // Inclass Exercise 3 description.
  
  // Extra path for my id and password files (so I don't have to show them
  // in this handout)
  $incpath = '/Applications/XAMPP/xamppfiles/data';
  // Add the new path items to the previous PHP path
  $path = get_include_path();
  set_include_path($path . PATH_SEPARATOR . $mailpath . PATH_SEPARATOR . $incpath);
  require 'PHPMailerAutoload.php';
  include 'data.php';
  
  // PHPMailer is a class -- we will discuss classes and PHP object-oriented
  // programming soon.  However, you should be able to copy / use this
  // technique without fully understanding PHP OOP.
  $mail = new PHPMailer();
 
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPAuth = true; // enable SMTP authentication
  $mail->SMTPSecure = "tls"; // sets tls authentication
  $mail->Host = "smtp.pitt.edu"; // sets Pitt as the SMTP server
  $mail->Port = 587; // set the SMTP port for the Pitt server
  $mail->Username = "$mailuser"; // Pitt username
  $mail->Password = "$mailpass"; // Pitt password

  $sender = strip_tags($_POST["sender"]);
  $receiver = strip_tags($_POST["receiver"]);
  $subj = strip_tags($_POST["subject"]);
  $msg = strip_tags($_POST["msg"]);

  // Put information into the message
  $mail->addAddress($receiver);
  $mail->SetFrom($sender);
  $mail->Subject = "$subj";
  $mail->Body = "$msg";

  // echo 'Everything ok so far' . var_dump($mail);
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
   else { echo 'Message has been sent'; }
?>
</body>
</html>