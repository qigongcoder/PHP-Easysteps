<?php
$city='New York';
$units='imperial';
$mode='xml';
$id='28df3c64f387cf55026e0de3fb8bbeaa4';
$request='http://api.openweathermap.org/data/2.5/weather?'.'q='.$city.'&units='.$units.'&mode='.$mode.'&APPID='.$id;

echo $request;

$xml=simplexml_load_file($request)
or die('Unable to load data');

try{
	$xml->asXml('params.xml');
	header('Loaction: params.xml');
}catch (Exception $e){
	echo'Error: '.$e->getMessage();
}