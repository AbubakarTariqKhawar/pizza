

<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

	
	if($method == "GET"){
		session_start();
        $id_User = $_SESSION['user_id'];
        $admin = $_SESSION['user_admin'];

        $allOrders = '';

        if($admin == 1){
            $allOrders = QUERY::getAllOrder();
        }else{
            $allOrders = QUERY::getAllOrderbyUserId($id_User);
        }

		echo $allOrders;
		
	}
		

	
	if($method == "POST"){
        
		$datosJSON = file_get_contents('php://input');
		$datos = json_decode($datosJSON);
		
        $userId = $datos->userId;
        $orderId = $datos->orderId;
        $description = $datos->description;
        $finalRate = $datos->finalRate;

        $insertReview = QUERY::insertreviews($orderId,$userId,$finalRate,$description);

		echo $insertReview;
        
	}
	
	
    


?>