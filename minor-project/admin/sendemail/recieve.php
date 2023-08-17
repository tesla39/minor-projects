<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php'; 
 require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"]))
{
     $mail = new PHPMailer(true); 
     $user=$_POST["email"];
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
 $mail->SMTPAuth = true; 
 $mail->Username = 'bknawaraj81@gmail.com'; 
 //$mail->Password = 'rxxycjomntzylpst'; 
 $mail->Password = 'bhswpzmuypmndsiw';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = 465;
 $mail->setFrom($user);
 $mail->addAddress('bknawaraj81@gmail.com'); 
 $mail->isHTML(true); 
 $mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];
      $mail->send(); 
      echo 
      "
      <script>
      alert('sent successfully');
      document.location.href='index.php';
      </script>
      ";
} 
echo "Running";

?>


