<?php
$str = "what up [name] how are you TK for your shoping
your order ID :[order-id]
your Total :[Total]";
// ---------------
$Total ="1000";
$name = " ehs";
$order_id ="3324";
// ---------------
$replace_text = [
    "[name]" => $name,
    "[Total]" => $Total,
    "[order-id]" => $order_id,
];

$d = str_replace(
    array_keys($replace_text),
     array_values($replace_text),
     $str);
echo $d;
?>