

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

		$a = QUERY::getAllOrder();
		echo $a;
		
	}
		

	
	if($method == "POST"){
        //inserted
        $a = json_decode(QUERY::insertreviews($OreOrdId,$OreUseId,$OreStar,$OreComment));
		echo $a;
        /*
		$datosJSON = file_get_contents('php://input');
		$datos = json_decode($datosJSON);
		$nombre = $datos->nombre;
		$edad = $datos->edad;
		echo "Hola ".$nombre." veo que ya tienes ".$edad." años";
        */
	}
	
	
    


?>