<?php
echo'<title>PHP SimplexXML</title><pre>';
$xml = simplexml_load_file('catalog.xml')
or die('Unable to load data!');
var_dump($xml);
?>
