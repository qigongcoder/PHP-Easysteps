<?php
echo'<title>PHP SimpleXML</title>';
$xml=simplexml_load_file('catalog.xml')
or die('Unable to load data');

echo'First book: '.
	$xml->book[0]->title.'in easy steps<br>';
echo 'Language category: '.$xml->book[0]->category;
