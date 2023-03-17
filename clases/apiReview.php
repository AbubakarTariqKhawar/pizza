

<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

	
	
	if($method == "POST"){
        
		$datosJSON = file_get_contents('php://input');
		$datos = json_decode($datosJSON);
		
        $loadArder = $datos->loadArder;

        $getAllReviews = QUERY::getAllReviews($loadArder);

		echo $getAllReviews;
        
	}
	
	
    


?>