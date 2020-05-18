<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';



$mail->Username='nourbenamor925@gmail.com';
$mail->Password='bacmath2018';

$mail->setFrom('nourbenamor925@gmail.com');
$mail->addAddress('nriahi44@gmail.com');

$mail->isHTML(true);

$mail->Subject='Inscription';
$mail->Body='<h1 align=center >Votre inscription est effectuée avec succès.</h1> <br><br><br> <h3 align=center> Merci d avoir choisi Melodyo</h3> <br>';

if (!$mail->send())
	{echo "Message n'est pas envoyé";}
else{echo "Message envoyé";}
?>