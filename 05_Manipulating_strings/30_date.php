<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

echo 'Date : '.date('jS F Y').'<br>';
echo 'Day : '.date('l').'<br>';
echo 'Time : '.date('h:i:s a').'<br>';
echo 'Timezone : '.date_default_timezone_get().'<hr>';

date_default_timezone_set('America/New_York');
echo 'Timezone now : '.date_default_timezone_get();
echo '<br>Time now :'.date('h:i:s a').'<hr>';

$d = strtotime('tomorrow');
echo 'Tomorrow :'.date('l,jS F Y',$d).'<br>';

$d = strtotime('July 11, 1994');
echo 'David\'s Birthday : '.date('F jS',$d);


?>
</body>
</html>