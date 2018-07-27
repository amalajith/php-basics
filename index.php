<?php
//This is a single line comment in php
require './Vehicle.php';
require './Car.php';




/*
 * This is a
 * multi line comment in
 * php
 */

//Creating a new variable in php. All variables declared outside of a function are global variables.
$name = "Netiapps";
$city = 'bangalore';

//$city = null;
$description = "We are now in $city";
//echo $description;

//You can reassign a value to a variable
//$name = 3;


//Constants are declared using the define function
define('PI',3.14);

//Getting the get request from the browser.
//echo $_GET['name'];

//echo PI;

//variables can be strings, integers, booleans, arrays, null
$first_number = 1;
$is_valid_user = false;

//In PHP arrays are 0 indexed.
//Numerically indexed array
$animals = ['dog','cat','elephant'];

//Output the structure of an array
//print_r($animals);

//Output the first element of an array
//echo $animals[0];

//Super globals

//print_r($_SERVER);

function sayHello($name) {

	echo "Hello $name";
}


//sayHello('aparna');

//Everything above is called a procedural programming.

$car1 = new Car('audi','red');
//$car2 = new Vehicle('tata','black');

echo $car1->color . '<br>';

$car1->paint('blue');

echo $car1->color . '<br>';

//Start driving the car
$car1->drive();

//Paint wont work
$car1->paint('yellow');

echo $car1->color . '<br>';

$car1->stopDriving();

$car1->paint('yellow');

echo $car1->color . '<br>';

//echo $car2->color;

?>