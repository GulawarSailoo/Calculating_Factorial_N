<?php
//php function for factorial of a number starts here..
function Factorial($num){
$factorial=1;//initializing to 1
//Use for loop to calculate the factorial.
for($i=1;$i<=$num;$i++){
$factorial=$factorial*$i;
}
return $factorial;
}
$num=10;//giving input as 10 
//calculating the factorial of 10 here you can give any number..
$fact=Factorial($num);
echo"Factorial = $fact";//printing the results;
?>
