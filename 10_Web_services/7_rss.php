<?php
$url='http://rss.news.yahoo.com/rss/entertainment';
$xml=simplexml_load_file($url)
or die('Unable to load data');
include('includes/rss-header.html');
foreach($xml->channel->item as $item){
	echo'<a href="'.$item->link.'">'.$item->title.'</a>';
	echo'<br><small>'.$item->pubDate.'</small><br>';
	echo $item->description.'<hr>';
}
include('includes/rss-footer.html');