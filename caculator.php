<?php

echo "Enter the Value You want to Calculate\n";
$firstValue=readline("Enter the First Value = ");
$secondValue=readline("Enter the Second Value = ");
echo "Enter the arithmetic operators symbol you want for you calculation\n";
echo "Example : +  - * / \n";
echo "\n";
$symbol=readline("Enter the Symbol  : ");
if($symbol == "+"){
    $sum=$firstValue+$secondValue;
    echo "The Summation of two number is : $sum";
}


?>