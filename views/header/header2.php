<?php
  //require_once("check-table.php");
  $orderSL = 0;
  if(isset($_SESSION['cart'])){
    $orderSL = count($_SESSION['cart']);
  }else{
    $orderSL = 0;
  }
?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//ES">
<html>
<head>
  <title>CrackPizza</title>
  <meta charset="UTF-8">
  <meta name="description" content="Descripció web">
  <meta name="keywords" content="Paraules clau">
  <meta name="author" content="Autor">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="<?=base_url.'assets/icons/logofa.png'?>">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="<?=base_url.'assets/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?=base_url.'assets/css/style33.css'?>" rel="stylesheet" type="text/css" media="screen">
  <script src="<?=base_url.'assets/js/bootstrap.bundle.min.js'?>"></script>
  <link href="<?=base_url.'assets/css/notie.min.css'?>" rel="stylesheet">
</head>
  
<body>

<header>
    <nav class="navbar navbar-expand-lg headerC fixed-top">
      <div class="container-lg ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <a class="navbar-brand text-color1 logomm" href="<?=base_url.'pizza/index'?>"><img src="<?=base_url.'assets/images/logob.svg'?>" height="92px" alt="CrackPizza" ></a>
          <div class="pizzaman d-none d-lg-block"></div>
        <div id="botones_tienda_smartphone" >
          <ul style="list-style-type: none;">
              <li class="nav-item dropdown" style="float:left;">
                <a class="nav-link dropdown-toggle  usericon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?=base_url.'pizza/profile'?>">Your Profile</a></li>
                  <li><a class="dropdown-item" href="<?=base_url.'pizza/logout'?>">Log Out</a></li>
                </ul>
              </li>
              <li class="nav-item" style="float:left; ">
                <a class="nav-link   carticon" href="<?=base_url.'pizza/cart'?>"><img ></a>
                <a class="nav-link cartnumber1"><b><?php echo $orderSL;?></b></a>
              </li>
            </ul>      
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  buttoncrack"  aria-current="page" href="<?=base_url.'pizza/menu'?>">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  buttoncrack" href="<?=base_url.'pizza/aboutus'?>">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  buttoncrack" href="<?=base_url.'pizza/review'?>">Review</a>
              </li>
          </ul>
          <div id="botones_tienda_escritorio" class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  usericon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?=base_url.'pizza/profile'?>">Your Profile</a></li>
                  <li><a class="dropdown-item" href="<?=base_url.'pizza/logout'?>">Log Out</a></li>
                </ul>
              </li>
              <li class="nav-item" style="width: 38%;">
                <a class="nav-link   carticon" href="<?=base_url.'pizza/cart'?>"><img ></a>
                <a class="nav-link cartnumber3"><b><?php echo $orderSL;?></b></a>
              </li>
            </ul>      
          </div>
        </div>
      </div>
    </nav>
    
</header>

