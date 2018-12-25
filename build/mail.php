<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];

//$mail->SMTPDebug = 3;// Enable verbose debug output

$mail->isSMTP();
$mail->Host = 'mail.adm.tools';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                              
$mail->Username = 'sendmail@arthouselabs.com';
$mail->Password = 'arthouselabs19';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('sendmail@arthouselabs.com'); // от кого будет уходить письмо?
$mail->addAddress('d.motorin@arthouselabs.com');     // Кому будет уходить письмо 
$mail->addAddress('mike.farman@arthouselabs.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с arthouselabs';
$mail->Body    = '' .$name . ' оставил заявку, его почта ' .$email. '<br>Вопрос: ' .$text;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo 'Thank you';
}
?>