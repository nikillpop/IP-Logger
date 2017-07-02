<!DOCTYPE HTML>

<head>
<?php
$iplogfile = 'log/collectedinfo.html';
$ipaddress = $_SERVER['REMOTE_ADDR'];
$webpage = $_SERVER['SCRIPT_NAME'];
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen($iplogfile, 'a+');
chmod($iplogfile, 0777);
fwrite($fp, '['.$timestamp.']: '.$ipaddress.' '.$webpage.' '.$browser. "\n<br><br>");
fclose($fp);
?>
<title>EXAMPLE</title>
<head>

<body>
<!--
Site code goes here...
-->
