<?php

function createConnection(){
   $server = 'localhost';
   $dbname= 'phpmotors';
   $username = 'root';
   $password = '';
   $dsn = 'mysql:host='.$server.';dbname='.$dbname;
   $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
   // Create the actual connection object and assign it to a variable
   try {
    $link = new PDO($dsn, $username, $password, $options);
    return $link;
   } catch(PDOException $e) {
    echo 'Sorry, the connection failed';
    exit;
   }
  }
createConnection();
?>
