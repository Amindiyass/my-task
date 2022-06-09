<?php 
$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],


];

function my_function()
{
    foreach($GLOBALS['products'] as $key =>  $product){
    	$GLOBALS['products'][$key]['shipping_cost'] = $GLOBALS['products'][$key]['amount'] * (20/100);
    }
}
my_function();

print_r($products);
?>
