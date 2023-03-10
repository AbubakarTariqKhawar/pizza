
<section id="banner_principal" class="container-fluid " style="background-image: URL(<?=base_url.'assets/images/bcart.webp'?>);">
        <div class="col-12 bannerc">
          
        </div>
</section>

<div class="container-lg" style="padding-top: 30px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Your Order</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
            
            <?php
              require_once ("clases/createpizza.php");
              $totalPriceL = array();
              $totalPrice = 0;
              //session_destroy();
              if(isset($_SESSION['cart'])){
      

                $_SESSION['cart'] = array_values($_SESSION['cart']);
                //var_dump($_SESSION['cart']);
                $arrayPosition = 0;
                foreach($_SESSION['cart'] as $row){ ?>

                  <div class="row">
                    <div class=" col-12 mt-3 ">
                      <h3 style="font-size: 33px;"><b><?= $row->getName() ?></b></h3>
                      <div>
                        <img src="<?=base_url.'assets/images/'.$row->getPicture() ?>" alt="Card image cap"  class="cartimg">
                        <form action="<?=base_url."pizza/modifyproduct"?>" method="post">
                          <select onchange="this.form.submit()" class="form-select mt-4 cartselect" name="quantityP" >
                            <option selected><?= $row->getQuantity()?> Pizza</option>
                            <option value="1">One Pizza</option>
                            <option value="2">Two Pizza</option>
                            <option value="3">Three Pizza</option>
                          </select>
                          <input type="hidden" value="<?= $arrayPosition ?>" name="productID">
                        </form>
                        <form action="<?=base_url."pizza/modifyproduct"?>" method="post">
                          <input type="hidden" value="<?= $arrayPosition ?>" name="productId">
                          <select onchange="this.form.submit()" class="form-select mt-4 cartselect1" name="sizeP">
                            <option selected><?= $row->getSize() ?> Pizza</option>
                            <option value="S">Small Pizza</option>
                            <option value="M">Medium Pizza</option>
                            <option value="L">Large Pizza</option>
                          </select>
                          <input type="text" class="form-control mt-4 cartselect2" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly value="<?= $row->calculateSQ() ?>€">
                        </form>
                        <form action="<?=base_url."pizza/modifyproduct"?>" method="post">
                          <input type="hidden" value="<?= $arrayPosition ?>" name="deleteP">
                          <input type="image" style="cursor: pointer;" src="<?=base_url.'assets/images/delete.svg'?>" alt="Submit"  class="mt-4 cartimg1">
                        </form>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <?php
                  array_push($totalPriceL,$row->calculateSQ());

                  $arrayPosition++;
  
                }

                if(count($_SESSION['cart']) == 0){ ?>
                  <p style="font-size: 25px;"><b>You dont have any product selected.</b></p>
                <?php }

                $totalPrice = Pizza::calculatePrice($totalPriceL);
                $_SESSION['totalPrice'] = $totalPrice;
              }else{ ?>
                <p style="font-size: 25px;"><b>You dont have any product selected.</b></p>
              <?php }



              $orderFin = '';
              if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $row){
                  $orderFin .= '<p><b>Product Name: </b> '.$row->getName().', <b>Quantity: </b> '.$row->getQuantity().', <b>Size: </b> '.$row->getSize().', <b>Price: </b> '.$row->calculateSQ().'€, <b>Category: </b> '.$row->getCategory().'.</p>';
                  
  
                }
                $orderFin .= '<p><b>Total Price: </b> '.$_SESSION['totalPrice'].'€</p>';
              }
              

              
              $_SESSION['cookieValue'] = $orderFin;
              

            ?>
            
            
            <div  class="row totalPT" >
                <div class=" col-11 mt-3" >
                  <div class="totalPT1" >
                    <h3 class="totalPT2 mt-3" ><b>Total Price:</b></h3>
                  </div>
                  <div >
                    <input type="text" class="form-control mt-3 cartselect2" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly value="<?php echo $totalPrice; ?>€">
                  </div>
                </div>
            </div>

            

            

