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
}elseif {
    echo 'Nope it not';
};

?>