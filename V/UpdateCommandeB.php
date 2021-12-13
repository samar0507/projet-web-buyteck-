<?php
include_once "../config.php";
include "../C/commandesController.php";
$u=new commandesController();
$u->UpdateOrder($_GET['num'],$_GET["status"]);

header('Location:commandeB.php');



//include required files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

//define names spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$z=$_GET['num'];
//creat instance of phpmailer
$mail= new PHPMailer();
//set mailer to use smtp
$mail->isSMTP();
//define stmp host
$mail->Host ="smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth ="true";
//set type of encryption(ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port ="587";
//set gmail username
$mail->Username = "projetweb1298@gmail.com";
//set gmail password
$mail->Password = "Projetweb1298.";
//set email subject
$mail->Subject = "Test Email Us";
//set sender email
$mail->setFrom("projetweb1298@gmail.com");
//Enable HTML
$mail->isHTML(true);
//email body
$mail->Body = "<h1>ORDER CONFIRMED<h1>
    <br>http://localhost/superb-html-template/Dashboard/pages/Confirmation.php?num=$z<br> ";
//Attachement
$mail->addAttachment('logo2.png');         

//add recipient
$mail->addAddress("yessine.blanco@esprit.tn");
//finaly send email
if ( $mail->Send() ){
    echo "<script> alert(Email Sent..!)<script>";}
    else{
        echo"<script>alert(Error!)<script>";
    }

//closing smtp connection
$mail->smtpClose();
?>