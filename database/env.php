<?php
 $dbHost = 'localhost';
 $dbuserName= 'root';
 $dbPassword= '';
 $dbName= 'class_practice';

 $connect= mysqli_connect($dbHost, $dbuserName,$dbPassword,$dbName);

 if(!$connect){
echo 'failed';
 }


?>