<?php

#not using bellow, instead using root
#$dbc = mysqli_connect ( 'localhost' , 'mike' , 'easysteps','site_db' )

$dbc = mysqli_connect ( 'localhost' , 'root' , 'Waydi2dt','site_db' )
OR die
(mysqli_connect_error());   

mysqli_set_charset($dbc, 'utf8');
