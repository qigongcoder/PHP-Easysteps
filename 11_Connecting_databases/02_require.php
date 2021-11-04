<?php
#Incorporate the MySQL connection script.

echo'Here1<br>';

require ('../connect_db.php');
#Display MySQL version and host.

echo'Here4<br>';

if(mysqli_ping($dbc)){
    echo 'MySQL Server'.mysqli_get_server_info($dbc).'connected on'.mysqli_get_host_info($dbc);
}
