<?php

$watts = $hours = $price= "";
$kwhr = $x = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$watts = htmlspecialchars($_POST["Watts"]);
$hours = htmlspecialchars($_POST["hours"]);
$price = htmlspecialchars($_POST["Price"]);   

}

$kwhr = ($watts * $hours) / 1000 ;
$x = $kwhr * $price;

echo "$x";