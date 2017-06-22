<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$empresa = $_POST['empresa'];
$nombre  = $_POST['nombre'];
$cargo  = $_POST['cargo'];
$telefono  = $_POST['telefono'];
$correo  = $_POST['correo'];
$region  = $_POST['region'];
$partnerId  = $_POST['partnerId'];
$type  = $_POST['type'];

if (empty($_POST['campaignId'])) {
	$campaignId = "5";
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

$url='http://ares.3dm.com.co/bobm/Views/WS/?campaignId='.urlencode($campaignId).'&partnerId='.urlencode($partnerId).'&type='.urlencode($type).'&empresa='.urlencode($empresa).'&nombre='.urlencode($nombre).'&cargo='.urlencode($cargo).'&telefono='.urlencode($telefono).'&correo='.urlencode($correo).'&region'.urlencode($region);
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,$url);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Title');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

//echo "Query:n$url n";

//echo "Reply: $query";

include("data.php");
// if ($region == "Antioquia") {
// 	$to="carlosblondsk8@gmail.com";
// }elseif ($region == "Eje_Cafetero") {
// 	$to="carlosrubioweb@yahoo.com";
// }elseif ($region == "Oriente") {
// 	$to="carlosr@3dm.com.co";
// }
$from="Javerianaenregion.com";
$from_name="Unidad de formación empresarial";
$msg="
<p><b>Empresa:</b> $empresa</p>
<p><b>Region:</b> $region</p>
<p><b>Nombre:</b> $nombre</p>
<p><b>Cargo:</b> $cargo</p>
<p><b>Telefono:</b> $telefono</p>
<p><b>Correo:</b> $correo</p>
"; // HTML message
$subject="Nuevo mensaje de Javerianaenregion.com";
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
 echo "Estamos Validando tu Información $nombre";
}
?>