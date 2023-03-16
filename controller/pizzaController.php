<?php

class pizzaController{
    public static function index(){

        include ("views/header.php");
        include ("views/home.php");
        include ("views/footer.php");
    }

    public function cart(){

        include ("views/header.php");
        include ("views/cart.php");
        include ("views/buynowP.php");
        include ("views/footer.php");
        
    }
    public function aboutus(){

        include ("views/header.php");
        include ("views/aboutus.php");
        include ("views/footer.php");

        
    }
    public function createsession(){

        include ("views/createsession.php");
        
    }
    public function menu(){

        include ("views/header.php");
        include ("views/menu.php");
        include ("views/footer.php");
        
    }
    public function modifyproduct(){

        include ("views/modifyproduct.php");
        
    }

    public function saveorder(){

        include ("clases/query.php");
        include ("views/saveorder.php");
        
    }

    public function orderFinished(){

        
        //setcookie("lastOrder", "", time() - 10);
        if(!isset($_COOKIE['lastOrder'])) {
            session_start();
            //var_dump($_SESSION['cookieValue']);
            setcookie("lastOrder", $_SESSION['cookieValue'], time() + 10 );
            header("Refresh:0");
          
        }

        include ("views/header.php");
        include ("views/orderFinished.php");
        include ("views/footer.php");
        
    }
    public function privacy(){

        include ("views/header.php");
        include ("views/privacy.php");
        include ("views/footer.php");
        
    }
    public function login(){

        include ("clases/query.php");
        include ("clases/bcrypt.php");
        include ("views/header.php");
        include ("views/loginuser.php");
        include ("views/login.php");
        include ("views/footer.php");
        
    }
    public function logout(){

        include ("views/logout.php");
        
    }
    public function profile(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("clases/bcrypt.php");
        include ("views/header.php");
        include ("views/subheader.php");
        include ("views/profilecode.php");
        include ("views/profile.php");
        include ("views/footer.php");
        
    }
    

    public function userorders(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("views/header.php");
        include ("views/subheader.php");
        include ("views/userorders.php");
        include ("views/footer.php");
        
    }

    public function allproduct(){

        require("views/protection.php");
        include ("views/header.php");
        include ("views/subheader.php");
        include ("views/allproduct.php");
        include ("views/footer.php");
        
    }

    public function editproduct(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("views/header.php");
        include ("views/subheader.php");
        include ("views/editproductP.php");
        include ("views/editproduct.php");
        include ("views/footer.php");
        
    }

    public function deleteproduct(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("views/deleteproduct.php");
        
    }

    public function createproduct(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("views/header.php");
        include ("views/subheader.php");
        include ("views/createproductP.php");
        include ("views/createproduct.php");
        include ("views/footer.php");
        
    }

    public function payment(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("views/header.php");
        include ("views/paymentcode.php");
        include ("views/payment.php");
        include ("views/footer.php");
        
    }
    public function paymentP(){

        require("views/protection.php");
        include ("clases/query.php");
        include ("views/paymentP.php");
        
    }
    public function review(){

        include ("views/header.php");
        include ("views/review.php");
        include ("views/footer.php");
        
    }
    public function testjava(){

        include ("clases/query.php");
        include ("assets/js/startform.js");
        
    }
    public function ptest(){

        include ("clases/query.php");
        include ("views/testpj.php");
        
    }
    public function api(){

        include ("clases/query.php");
        include ("clases/api.php");
        
    }
    


    
}