<?php

include ("orders.php");

class Order extends Orders{

    public function __construct ($OrdId, $OrdUseId, $OrdAddId, $OrdCreatedDate, $OrdAddIns, $OrdPaid, $OrdRecived){
        parent::__construct ($OrdId, $OrdUseId, $OrdAddId, $OrdCreatedDate, $OrdAddIns, $OrdPaid, $OrdRecived);

    }

    

}

?>