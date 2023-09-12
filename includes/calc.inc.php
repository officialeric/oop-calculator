<?php
declare(strict_types = 1);
include('autoloader.php');

#grabbing values
$num1 = $_POST['num1'];
$op = $_POST['op'];
$num2 = $_POST['num2'];

#instantiating a class
$calc = new Calc($num1,$op,$num2);

try {
   $result = $calc->calculator();
   echo $result;
} catch (TypeError $th) {
    echo 'Error!= ' . $th->getMessage();
}

