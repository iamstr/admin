<?php


require_once("../config.php");


function getRecords(){
    $date=date("F");
    $category_query = query("SELECT * FROM `payment`,clients WHERE client_id=clients.clients_id and date ='$date'");
    confirm($category_query);


    while($row = fetch_array($category_query)) {

    $user_id = $row['clients_id'];
    $username = $row['client_name'];
    $email = $row['client_number'];
    $rate=$row['rate'];
    $amount=$row['amount'];
    $status=$row['status'];
    $location=$row['client_location'];
    $speed=$row['speed'];
    $balance=$row['balance'];
    if($balance==0){
        $fully="Fully Paid";
    }else{

        if($balance>$amount){

            $minus=$balance-$amount;
            $fully="KES ".$minus." Paid";
        }else{
            $minus=$amount-$balance;
            $fully="KES ".$minus." Paid";
        }


    }
    $user = " <tr>
    <td>{$user_id}</td>
        <td>{$username}</td>
        <td>{$email}</td>
        <td>$location</td>
        <td > <span class='badge badge-pill badge-{$status}'>$fully</span></td>
        <td>$rate</td>
        <td>$balance</td>
        <td>$speed</td>
        <td>$date</td>



    </tr>";

    echo $user;
    }

}


getRecords();


?>