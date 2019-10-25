<?php

require_once("../config.php");

$date=date("Y-m-d");
$product_title          = escape_string($_POST['name']);
$product_category_id    = escape_string($_POST['phone']);
$product_price          = escape_string($_POST['location']);
$product_description    = escape_string($_POST['rate']);
$short_desc             = escape_string($_POST['speed'])." Mbp/s";



$query = query("INSERT INTO clients ( client_name, client_number, client_location, rate, speed) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}')");
$last_id = last_id();
confirm($query);


$myObj["name"] = $_POST['name'];
$myObj["phone"] = $_POST['phone'];


$myJSON = json_encode($myObj);

echo $myJSON;


?>