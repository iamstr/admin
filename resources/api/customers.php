<?php

require_once("../config.php");


function getClients(){

    $category_query = query("SELECT * FROM clients");
confirm($category_query);


while($row = fetch_array($category_query)) {

$user_id = $row['clients_id'];
$username = $row['client_name'];
$email = $row['client_number'];


$user = "<option value='{$user_id}'> {$user_id}  {$email}</option>";

echo $user;
}
}



getClients();

?>