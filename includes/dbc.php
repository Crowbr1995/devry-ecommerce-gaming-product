<?php
    $host = 'sql108.epizy.com';
    $userName = 'epiz_31212005';
    $passWord = 'KEoVAm96BZYB';
    $dataBase = 'epiz_31212005_gameSite';

    $con  = mysqli_connect($host, $userName, $passWord, $dataBase);

    $connect_error = mysqli_connect_error();
    if($connection_error != null){
        echo '<p>Error connecting to database: $connection_error</p>';
    }else{
        echo 'Connected to Admin MySQL <br />'
    }
?>