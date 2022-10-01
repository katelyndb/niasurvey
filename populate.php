<?php


// Katie is Messing around in PHP
//$user_selection = $_REQUEST['user_selection'];
//$query = 'SELECT * FROM results WHERE question1 = '. $user_selection;

    // Creating the PDO Connection with the Proxy User
    $server = 'localhost';
    $dbname= 'niasurvey';
    $username = 'iClient';
    $password = 'qKBk!RNTOZIPyOm!'; 
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
     $link = new PDO($dsn, $username, $password, $options);
     insertData();
    } catch(PDOException $e) {
     header('Location: /phpmotors/view/500.php');
     exit;
    }
    


    // Inserting all the data into the table
    function insertData(){
    $creationsql = require_once $_SERVER['DOCUMENT_ROOT'] . './niasurvey/sql/niasurvey.sql';
    
    // Error Checking for Insertion
    if ($link->query($creationsql) === TRUE) {
      echo "The data was inserted successfully";
    } else {
      echo "Error: " . $creationsql . "<br>" . $link->error;
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['popbutton']))
    {
        insertData();
    }




    // Retrieving the Data and Displaying to the User
    $data = $link->query("SELECT people.LastName, survey.Song FROM people JOIN survey ON people.ID = survey.ID;")->fetchAll();

    foreach ($data as $row) {
        echo $row['LastName']."<br />\n";
    }

?>