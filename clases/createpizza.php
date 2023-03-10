<?php
require_once ("query.php");


$pizzaNormal = QUERY::getAllProByType(1);
$pizzaVegetarian = QUERY::getAllProByType(2);
$allProduct = QUERY::getAllPro();


?>