<?php

require ('../connect_db.php');

$q='SHOW TABLES';

$r=mysqli_query($dbc,$q);

if($r){
    echo'<h1>Tables on site_db database</h1>';
    while($row = mysqli_fetch_array($r,MYSQLI_NUM)){
        echo'<br>'.$row[0];
    }
    mysqli_free_result($r);
}else{
    echo'<p>'.mysqli_error($dbc).'</p>';
}

mysqli_close($dbc);


