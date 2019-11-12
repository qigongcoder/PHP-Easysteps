<?php
echo'<title>PHP SimplexXML</title>';
$xml=simplexml_load_file('catalog.xml')
or die('Unable to load data');
$counter=0;
foreach($xml->children() as $book){
	$counter++;
	echo 'Book'.$counter.':';
	echo $book->title.'in easy steps ['.$book->category.']<hr>';
}
