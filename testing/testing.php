<?php
// Testing out Some stuff
echo '<h1> Welcome to Katie Testing Stuff </h1>';
/* Multi Line 
Comment */

// Variables
$variable_name = 'Text Value';
$integer_baby = 22;
echo $variable_name;
// Constants
define("Password", 'Yep123');
// Global
global $integer_baby;
// Arithmetic
echo ($integer_baby + 45) * 3;
// Assignment Operators
$integer_baby *= 3;
// Arrays 
$colors = array('Purple', 'Green', 'Black');
$best_color = $colors[1];
// Associative Array
$ages = array('Nia'=>19,'Ben'=>22,'Katie'=>20);
echo $ages['Nia'];
// Multi Dimensional Array
$people = array(
    'guys'=>array('Archer', 'Ben'),
    'girls'=>array('Nia', 'Katie')
);
// If / Conditional Statements
if ($color[0]== 'Purple' and 5 > 1) {
    echo 'Yep it is purple!';
} elseif ($color[0]== 'Blue') {
    echo  'It is BLUE!';
}else {
    echo 'Nope it not';
}
// Loops \
$i = 1;
while ( $i < 5) {
    echo 'YEET';
    $i++;
}
$changing = 1;
do {
    echo $changing + ' WOW';
    $changing++;
} while ( $changing < 3 );
for ($i = 0; $i < 4; $i++) {echo 'Another loop wow';}
foreach ($colors as $item) { echo $item;}
// INCLUDE AND REQUIRE

/* 
    Inside the header of the file
    <php include 'header.php'; ?>
    
    Require will produce a fatal error if failure to retrieve
    <php require 'header.php'; ?>
*/

// Functions
function cool_boy($name = 'Default Name') {
    echo $name + 'Stay cooool boiiii';
}
cool_boy('Bob');

function another_function($food, $place) {
    echo $food + ' from ' + $place;
    return 1;
}
echo another_function('bacon','the store');

// Super Global Variables
/*
    $_SERVER
    $GLOBALS
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

// Working with Files
$my_file = fopen('cool_file.txt', 'w');
fwrite($my_file, 'My added text wow');
fclose($my_file);

// Reading

$another_file = file('awesome_file.txt');
foreach ($another_file as $line) {
    echo $line;
}

// Classes
class Dog {
    public $breed; // property
    public function fetch() {
        // method
        echo 'Plays fetch';
    }
}
$emily = new Dog(); // instantiating
$emily ->breed = "Black Lab"; // assigning
echo $emily ->breed;
$emily ->fetch();

// THIS
class Cat {
    public $breed; // property
    public $age;
    public function info() {
        // method
        echo 'Breed' + $this -> breed;
        echo 'Age' + $this -> age;
    }

}


?>