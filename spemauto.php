<?php
function line() {
echo "---------sayser line attack--------\n";
echo "\n";
$header = "";
$message = $header. "message your";
$LINE_API = "https://notify-api.line.me/api/notify";
$LINE_TOKEN = "token your";
$x = 0;
while($x <= 500) {
  $queryData = array('message' => $message);
  $queryData = http_build_query($queryData,'','&');
  $headerOptions = array(
  'http' => array('method' => 'POST','header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".$LINE_TOKEN."\r\n"."Content-Length: ".strlen($queryData)."\r\n",
  'content' => $queryData));
  $context = stream_context_create($headerOptions);
  $result = file_get_contents($LINE_API, FALSE, $context);
  $res = json_decode($result);
  echo "attack $x \n";
  $x++;
  }
} 
try {
  echo "-";
  line();
}
catch(Exception $e) {
  echo "attack";
}
?>
