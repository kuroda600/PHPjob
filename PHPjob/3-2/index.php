<?php

$i = 0;
$fruits = ["りんご" => 300, "みかん" => 150, "桃" => 3000];
$quantity = [1, 1, 1];

function CalculatePrice($price, $quantity) {
    $sum = $price * $quantity;
    return $sum;
}

foreach ($fruits as $key => $value){
    echo $key."は".CalculatePrice($value,$quantity[$i])."円です。";
    echo "<br />";
    $i++;
}

?>