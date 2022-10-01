<?php


// Katie is Messing around in PHP
//$user_selection = $_REQUEST['user_selection'];
//$query = 'SELECT * FROM results WHERE question1 = '. $user_selection;

    // Creating the PDO Connection with the Proxy User
    $server = 'localhost';
    $dbname= 'niasurvey';
    $username = 'iClient';
    $password = '(S/TOBJMxH8iRP!V'; 
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
     $link = new PDO($dsn, $username, $password, $options);
    } catch(PDOException $e) {
     header('Location: ../phpmotors/view/500.php');
     exit;
    }
    /*
    // Inserting all the data into the table
    // This is commented out as the data has already been populated
    function insertData($link){
      $queries = array(
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (1, 'Blunck','Katie', 20, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (2, 'Painter','Ben', 22, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (3, 'Lamb','Archer', 20, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (4, 'Goodwill','Nia', 19, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (5, 'Goodwill','Hoyt', 17, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (6, 'Goodwill','Sanoma', 14, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (7, 'Goodwill','Hal', 10, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (8, 'Goodwill','Lil', 16, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (9, 'Goodwill','Cy', 12, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (10, 'Goodwill','Cindy', 47, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (11, 'Goodwill','Tim', 52, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (12, 'Blunck','Autumn', 42, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (13, 'Blunck','Corinne', 18, 'F');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (14, 'Ulrich','Quinn', 24, 'M');",
      "INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (15, 'Marin','Rachel', 18, 'F');",
      
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (1, 'Green', 'Alfredo Pasta', 'PC', 'Yearbook', 'Homesick by the Regrettes', 'Pineapple', 'Christmas', 'Root beer float', 'Evenings', 'Orange');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (2, 'Purple', 'French Fries', 'Painting', 'Programming', 'Someone Elses Dream by Absofacto', 'Peppers', 'Christmas', 'Chocolate milk', 'Evenings', 'Yellow');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (3, 'Red', 'Bread', 'Ability to make friends', 'Woodworking', 'Endless Summer by Absofacto', 'Tomatoes', 'Christmas', 'Eggnog', 'Evenings', 'Yellow');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (4, 'Orange', 'Mashed potatoes', 'How far I have come', 'Lord of the Rings', 'Never Loved Me by the Downturn', 'Peppers', 'Thanksgiving', 'Hot chocolate', 'Evenings', 'Yellow');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (5, 'Orange', 'Sushi', 'PC', 'Band', 'Godzilla by Eminem', 'Pepperoni', 'Halloween', 'Root beer', 'Evenings', 'Green');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (6, 'Red', 'Tuna', 'Winning the mancala tournament and battle of the books', 'Orchestra', 'Ping by Exyl', 'Ham', 'Christmas', 'Orange v8', 'Evenings', 'Brown');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (7, 'Magenta', 'Crepe cake', 'Laserman legos', 'Science', 'Resurrections by Lena Raine', 'Sausage', 'Christmas', 'Apple Juice', 'Mornings', 'Yellow');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (8, 'Green', 'This', 'Cool fencing skills', 'Lunch', 'Sparkly Abs by CG5', 'Pepperoni', 'Thanksgiving ', 'Hot chocolate', 'Mornings', 'Orange');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (9, 'Cyan', 'This', 'Lego creations', 'Science', 'Machine by Imagine Dragons', 'Cheese', 'Fourth of July', 'Cucumber Lime Gatorade ', 'Evenings', 'Brown');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (10, 'Blue','Salad','Masters degree and having kids','Math','Liar by the Arcadian Wild','Pepperoni','Christmas','Root beer','Mornings','Camo');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (11, 'Thursday', 'Berry pie','Wife and kids','Ones with friends','I Believe In You by Don Wilson','Sausage','Memorial day','Root beer','Mornings','Brown');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (12, 'Green','Korean BBQ','Improved painting skills','Art classes','House of Gold by Twentyone Pilots','Pepperoni','Christmas','Coconut bubble tea', 'Evenings','Red');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (13, 'Pink','Korean BBQ','Soccer','Chemistry','Achilles Come Down by Gang of Youths','Pineapple','Christmas','Pink lemonade','Mornings','Yellow');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (14, 'Orange','Chinese','Accordion','Aerospace engineering','Love Me More by Mitski','Sausage','Christmas','Lime Rickey','Mornings','Red');",
      "INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (15, 'Rainbow','Potatoes','Getting to college','Geology','Nara by alt-J','Pepperoni','Christmas','Pear juice','Evenings','Yellow');");
      //require_once $_SERVER['DOCUMENT_ROOT'] . './niasurvey/sql/niasurvey.sql';
    
    // Error Checking for Insertion
    foreach ($queries as $query) {
      $stmt = $link->prepare($query);
      $stmt->execute();
  }
}
*/

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['songsbutton']))
    {
        showSongs($link);
    }
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['colorsbutton']))
    {
        showColors($link);
    }




    // Retrieving the Data and Displaying to the User
    function showSongs($link){
    $data = $link->query("SELECT people.FirstName, survey.Song FROM people JOIN survey ON people.ID = survey.ID;")->fetchAll();
    echo "<table>";
    foreach ($data as $row) {

        echo '<tr><td>'.$row['FirstName'] . "</td> <td> " . $row['Song']."</td></tr>";

    }
    echo "</table>";
  }

  // Retrieving the Colors Data and Displaying to the User
  function showColors($link){
    $data = $link->query("SELECT people.FirstName, people.LastName, survey.FavColor, survey.LeastColor FROM people JOIN survey ON people.ID = survey.ID;")->fetchAll();
    echo "<table>";
    foreach ($data as $row) {

        echo '<tr><td>'.$row['FirstName'] . "</td> <td> " . $row['LastName']."</td> <td style=color:green;>".$row['FavColor'] . "</td> <td style=color:red;>". $row['LeastColor']."</td></tr>";

    }
    echo "</table>";
  }


?>