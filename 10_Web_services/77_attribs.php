<?php
echo'<title>PHP SimlpeXML</title>';
$xml=simplexml_load_file('catalog.xml')
or die('Unable to load data');
echo'First book:'.
	$xml->book[0]->title.'in easy steps<br>';
echo 'Cover:'.$xml->book[0]->title['cover'].'<br>';
echo'<img src="'.$xml->book[0]->title['cover'].'">';


