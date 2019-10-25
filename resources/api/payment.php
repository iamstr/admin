<?php

require_once("../config.php");

function checkRecordExist($id,$month){
    $id=escape_string($id);
    $month=escape_string($month);
    $category_query = query("SELECT * FROM payment where client_id='{$id}' and date='{$month}'");
    //$result=confirm($category_query);
    global $connection;
    if ($result=mysqli_query($connection,"SELECT * FROM payment where client_id='{$id}' and date='{$month}'"))
  {

  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  return $rowcount;
  }




}



function insertPayment(){

    if(isset($_POST['client_id'],$_POST['amount'])):
    $date=date("F");
$product_title          = escape_string($_POST['client_id']);
$product_category_id    = escape_string($_POST['amount']);
$balance=getBalance($product_title);

if(checkRecordExist($product_title,$date)==0){

    $balance=$balance-$product_category_id;
    if($balance==0){

        $status="success";
    }else{

        $status="warning";
    }
    $query = query("INSERT INTO payment( client_id,amount, balance, status, date) VALUES('{$product_title}', '{$product_category_id}', '{$balance}', '{$status}', '{$date}')");
$last_id = last_id();
confirm($query);
$myObj["balance"] = $balance;
$myObj["status"] = $status;


$myJSON = json_encode($myObj);

echo $myJSON;
}else{

    $balance=$balance-$product_category_id;
    if($balance==0){

        $status="success";
    }else{

        $status="warning";
    }

    $query=query("update payment set status='$status',balance='$balance' where client_id='$product_title' and date='$date'");
    confirm($query);
    $myObj["balance"] = $balance;
    $myObj["status"] = $status;


    $myJSON = json_encode($myObj);

    echo $myJSON;
}

else:echo "please fill the fields";
endif;

}



function getBalance($id){
$id=escape_string($id);
    $category_query = query("SELECT * FROM clients where clients_id='$id'");
confirm($category_query);

$rate=0;
while($row = fetch_array($category_query)) {

$user_id = $row['clients_id'];
$username = $row['client_name'];
$email = $row['client_number'];

$rate = $row['rate'];

}

return $rate;

}


//getClients();
insertPayment();
?>