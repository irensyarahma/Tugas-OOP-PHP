<?php
require_once('Ape.php');
require_once('Frog.php');
require_once('Animal.php');
$sheep = new Animal("shaun",4,'no');
$sungokong = new Ape("kera",2,'no');
$kodok = new Frog("budak",4,'no');

echo "Name : " . $sheep->name . "<br>";
echo "legs: " . $sheep->legs . "<br>";
echo "cold blooded: " . $sheep->cold_blooded . "<br>";
echo "<br>";
echo "Name: " . $sungokong->name . "<br>";
echo "legs: " . $sungokong->legs . "<br>";
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
echo "yell: ";
$sungokong->yell();
echo "<br>";
echo "<br>";
echo "Name: " . $kodok->name . "<br>";
echo "legs: " . $kodok->legs . "<br>";
echo "cold blooded: " . $kodok->cold_blooded . "<br>";
echo "jump: ";
$kodok->jump();



?>
