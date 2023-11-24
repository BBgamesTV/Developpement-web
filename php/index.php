<?php

$fruits = ["pomme","bannane","poire","peche","fraises"];

$legumes = array("carotte","pomme de terre","chou");

// echo $fruits[0] ."  ". $legumes[0];

$fruits[2] = "Litchi";

foreach($fruits as $key => $value ) {
    echo "fruit " .$key." : " . $value. "<br/>";
}



?>