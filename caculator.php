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
elseif($symbol=="-"){
    $subtract=$firstValue-$secondValue;
    echo "The Subtraction of two number is : $subtract";
}
elseif($symbol=="*"){
    $multiplication=$firstValue*$secondValue;
    echo "The multiplication of two number is : $multiplication";
}

elseif($symbol=="/"){
    $division=$firstValue/$secondValue;
    echo "The division of two number is : $division";
}
else{
    echo "Symbol Was Not Found!";
}

?>