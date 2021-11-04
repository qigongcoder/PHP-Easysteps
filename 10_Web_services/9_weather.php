<?php
include('includes/weather-header.html');
if($_SERVER['REQUEST_METHOD']=='POST'){

    $city=(empty($_POST['city']))?"New York":$_POST['city'];
    $units='implerial';
    $mode='xml';
    $id='28df3c64f387cf55026e0de3fb8bbeaa4';

    $request='http://api.openweathermap.org/data/2.5/weather?'.'q='.$city.'&units='.$units.'&mode='.$mode.'&APPID='.$id;

    $xml=simplexml_load_file($request)
    or die('Unable to load data');

    $icon='http://opeweathermap.org/img/w/'.
        $xml->weather['icon'].'.png';
    echo '<h1>Today in '.$xml->city['name'];
    echo ' it\'s '.$xml->weather['value'].'<img src='.$icon.'></h1>';
    echo '<ul><li>Temperature:'.$xml->temperature['value'];
    echo '&deg; '.$xml->temperature['unit'];
    echo '<li>Wind :'.$xml->wind->speed['name'];
    echo '<li>Humidity:'.$xml->humidity['value'].'&#37;</ul';

}

echo '<form method="POST" action="weather.php">';
echo '<fieldset><legend>Enter City Name</legend>';
echo '<input type="text" name="city">';
echo '<input type="submit" name="submission" value="Get Weather">';
echo '</fieldset></form>';

include('includes/weather-footer.html');










