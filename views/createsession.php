<?php
require_once ("clases/createpizza.php");

if(isset($_POST['addtocart'])){
    $order = $pizzaNormal[$_POST['addtocart']];
    session_start();
    //unset($_SESSION['cart']);

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exits");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }
    //var_dump( $_SESSION['cart']);

    header('Location:'.base_url.'pizza/index');

}elseif(isset($_POST['addtocartM'])){
    $order = $pizzaNormal[$_POST['addtocartM']];
    session_start();

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exits");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }

    header('Location:'.base_url.'pizza/menu');
    
}elseif(isset($_POST['addtocartMV'])){
    $order = $pizzaVegetarian[$_POST['addtocartMV']];
    session_start();

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exits");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }
    
    header('Location:'.base_url.'pizza/menu');
    
}else{
    header('Location:'.base_url.'pizza/index');
}



?>

