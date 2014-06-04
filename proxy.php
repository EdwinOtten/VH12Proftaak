<?php
$url = 'http://145.48.6.81:9001/HartigeHapProftaak-Planning-context-root/PersoneelsbManagerPort?wsdl';

if( !isset($_GET['service']) )
	die('You forgot to mention what service you want to speak to.');

$xml = '<?xml version="1.0" encoding="utf-8"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:bus="http://BusinessLogic/">
	<soapenv:Header/>
	<soapenv:Body>
			<bus:'.$_GET['service'].'/>
	</soapenv:Body>
</soapenv:Envelope>';


$ch = curl_init($url);  // cURL aanroepen
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);	 // timeout verlengen
$output = curl_exec($ch);
$info = curl_getinfo($ch);	 // info ophalen
curl_close($ch); 

// LOGGING START
//Pad naar huidige PHP script
$currentFolder = dirname(__FILE__);
// open file
$fd = fopen( $currentFolder."/log.txt", "a");
// write string
fwrite($fd, "LOGGED AT ".date("Y-m-d H:i:s") . "\n");
fwrite($fd, print_r($output,true) . "\n");
fwrite($fd, print_r($info,true) . "\n");
fclose($fd);
// LOGGING END 

echo $output;


?>