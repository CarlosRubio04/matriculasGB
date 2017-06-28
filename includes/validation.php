<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$nombrePadre = $_POST['nombrePadre'];
$nombreAlumno = $_POST['nombreAlumno'];
$edadAlumno = $_POST['edadAlumno'];
$curso = $_POST['curso'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

if (empty($_POST['campaignId'])) {
	$campaignId = "6";
}else {
	$campaignId = $_POST['campaignId'];
}
if (empty($_POST['partnerId'])) {
	$partnerId = "1";
}else {
	$partnerId  = $_POST['partnerId'];
}
if (empty($_POST['type'])) {
	$type = "Direct";
}else {
	$type  = $_POST['type'];
}

$url='http://ares.3dm.com.co/bobm/Views/WS/?campaignId='.urlencode($campaignId).'&partnerId='.urlencode($partnerId).'&type='.urlencode($type).'&padre='.urlencode($nombrePadre).'&alumno='.urlencode($nombreAlumno).'&edad_alumno='.urlencode($edadAlumno).'&curso='.urlencode($curso).'&telefono='.urlencode($telefono).'&email='.urlencode($email);
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,$url);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Title');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

echo "Query:n$url n";
echo "Reply: $query";

include("data.php");
$from="gimnasiobritanicoadmisiones.com";
$from_name="Gimnasio Britanico Admisiones";
$msg="
<p><b>Nombre del Padre:</b> $nombrePadre</p>
<p><b>Nombre del Alumno:</b> $nombreAlumno</p>
<p><b>Edad del Alumno:</b> $edadAlumno</p>
<p><b>Curso:</b> $curso</p>
<p><b>Teléfono:</b> $telefono</p>
<p><b>E-mail:</b> $email</p>


"; // HTML message
$subject="Nuevo mensaje desde gimnasiobritanicoadmisiones.com";
/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->isSendMail();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "Estamos Validando tu Información";
}
?>