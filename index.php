<?php
require('App/Functions/Calculate.php');

echo "Prime Calculator V.1.0(beta)";
echo "\n";
echo "-------------------------------";
echo "\n";
//create an Calculate instance.
$calculator = new \App\Functions\Calculate;
//start the calculator.
exec($calculator);
