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
    $mail->Body  = "changer votre mot de passe: <br>   <form class='form' action='http://localhost/New%20folder%20(2)/superb-html-template/Viewer/suppmdpanc.php' method='POST'>
    <input type='email'  class='input-text col-lg-5' id='email' value='' name='email' placeholder='confirmer votre email'>
        <input type='password'  placeholder='nouveau mot de passe' class='input-text col-lg-5' id='password' value='' name='password'>
        
    <div class='buttons-set'>
      <button id='send2' name='' type='submit' class='button login'><span>verifier</span></button>
    </div>
  </form>";
    $mail->send();

?>