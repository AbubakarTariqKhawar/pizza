<?php
session_start();
if(isset($_SESSION['cart'])){
    $orderMaxId = QUERY::getuserMaxId('OrdId','orders');
    $orderMaxId = $orderMaxId + 1;
    $user_id = $_SESSION['user_id'];
    $user_Address_ID = $_SESSION['userAddressIdForOrder'];

    $OrdId = $orderMaxId;
    $OrdUseId = $user_id;
    $OrdAddId = $user_Address_ID;
    $OrdAddIns = 'null';
    $OrdPaid = 1;
    $OrdRecived = 0;

    $insert_order = QUERY::insertOrders($OrdId,$OrdUseId,$OrdAddId,$OrdAddIns,$OrdPaid,$OrdRecived);

    var_dump($_SESSION['cart']);

    foreach($_SESSION['cart'] as $row){
        
        $OdeOrdId = $orderMaxId;
        $OdeProId = $row->getId();
        $OdeQuantity = $row->getQuantity();
        $OdePrice = $_SESSION['totalPrice'];

        $insert_orderDe = QUERY::insertOrdersDetail($OdeOrdId,$OdeProId,$OdeQuantity,$OdePrice);
      
      

    }

    header("Location:".base_url."pizza/orderFinished");
}
