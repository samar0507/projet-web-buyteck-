<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                
    //Enable verbose debug output

    $mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'kamel.fridhi@esprit.tn';                      //email mteik
$mail->Password   = '201JMT1998';             //SMTP password
$mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$mail->isHTML(true);  
 
    
    $mail->setFrom('kamel.fridhi@esprit.tn', 'BuyTech');   // email eli bch tabath bih
    $mail->addAddress($_POST['email']);   // email leli theb tabaathloo

    $mail->Subject = 'inscription validee';
    $mail->Body  = "Vos etes inscrivait dans notre site web BuyTech clicker pour verifier <a style='color:purple;font-size:25px' href='http://localhost/New%20folder%20(2)/superb-html-template/Viewer/login.php'> verifier </a>";
    $mail->send();

?>