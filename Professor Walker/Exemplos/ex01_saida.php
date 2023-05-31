<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$soma = $num1+$num2;
$sub = $num1-$num2;
$multi = $num1*$num2;
$div = $num1/$num2;

echo "A soma é ",$soma;
echo "<br>A subtração é ",$sub;
echo "<br>A Multiplicação é ",$multi;
echo "<br>A divisão é ",$div;

?>