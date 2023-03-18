<?php
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
    <link href="<?=base_url.'assets/css/style34.css'?>" rel="stylesheet" type="text/css" media="screen">
    <script src="<?=base_url.'assets/js/bootstrap.bundle.min.js'?>"></script>
    <link href="<?=base_url.'assets/css/notie.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg headerC fixed-top">
      <div class="container-lg " >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <a class="navbar-brand text-color1  logomm" href="<?=base_url.'pizza/index'?>"><img src="<?=base_url.'assets/images/logob.svg'?>" height="92px" alt="CrackPizza" ></a>
          <div class="pizzaman d-none d-lg-block"></div>
      

        <div id="botones_tienda_smartphone">
          <a href="<?=base_url.'pizza/login'?>" ><img class="usericonm" style="width: 30px; height: 38px; margin-right: 9px; "></a>
          <div style=" width: 25%; float: right">
            <a class="nav-link carticon" href="<?=base_url.'pizza/cart'?>"><img style="width: 30px; height: 38px;"></a>
            <a class="nav-link cartnumber1"><b><?php echo $orderSL;?></b></a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link buttoncrack" aria-current="page" href="<?=base_url.'pizza/menu'?>"><b>Menu</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link buttoncrack" href="<?=base_url.'pizza/aboutus'?>"><b>About Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link buttoncrack" href="<?=base_url.'pizza/review'?>"><b>Review</b></a>
            </li>
          </ul>
          <div id="botones_tienda_escritorio" class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link  usericon" href="<?=base_url.'pizza/login'?>" role="button">
                  <img>
                </a>
                <div style=" width: 38%;">
                  <a class="nav-link carticon" href="<?=base_url.'pizza/cart'?>"><img ></a>
                  <a class="nav-link cartnumber"><b><?php echo $orderSL;?></b></a>
                </div>
                
            </ul>      
          </div>
         
        </div>
      </div>
    </nav>
</header>