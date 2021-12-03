<?php
$to = "samar.hamdi@esprit.tn"; // Your Brand Mail ID
$from = "sousou27.hamdi@yahoo.fr"; // Replace it with your From Mail ID

$headers = "From: " . $from . "rn";

$subject = "New subscription";
$body = "New user subscription: " . "sousou27.hamdi@yahoo.fr";
if( filter_var("sousou27.hamdi@yahoo.fr", FILTER_VALIDATE_EMAIL) )
{
if (mail($to, $subject, $body, $headers, "-f " . $from))
{
echo 'samar.hamdi@esprit.tn (' . "sousou27.hamdi@yahoo.fr". ') has been added to our mailing list!';
}
else
{
echo 'There was a problem with your e-mail (' . "sousou27.hamdi@yahoo.fr" . ')';
}
}
?>