<?php
// Create two numbers
$number1=3;
$number2=8;
// Find minimum and maximum number
$minNumber=min($number1,$number2);
$maxNumber=max($number1,$number2);
// Craete a variable to save a string with a list of numbers
$stringNumbers="";
// Create a variable to save the result of add all the numbers
$total=0;
// Create a loop to save info on $stringNumbers and $total
for($x=$minNumber;$x<=$maxNumber;$x++){
    // Add current number to $stringNumbers and a "-" if the number is less than $maxNumber
    $stringNumbers=$stringNumbers.$x;
    if($x<$maxNumber){
        $stringNumbers=$stringNumbers."-";
    }
    // Create a math operation to add $total and current number and save the result on $total
    $total=$total+$x;
}
// Print $stringNumbers and $total
echo "Numbers list: ".$stringNumbers;
echo "Total: ".$total;
?>