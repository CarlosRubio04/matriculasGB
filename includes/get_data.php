 <?
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$campaignId = $_GET['campaignId'];
$partnerId = $_GET['partnerId'];
$type = $_GET['type'];

?>
