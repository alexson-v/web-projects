<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
 
$mail->setFrom('', 'Веб-розробник Владислав');
$mail->addAddress('');
$mail->isHTML(true);

$mail->Subject = 'Дані від нового клієнта';
$mail->Body    = '
	Користувач залишив такі дані <br> 
	Ім`я: ' . $name . ' <br>
	E-mail: ' . $email . '<br>
	Письмо: ' . $text . ''<br>;

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>