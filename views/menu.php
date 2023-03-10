
<section id="banner_principal" class="container-fluid " style="background-image: URL(<?=base_url.'assets/images/bmenu.webp'?>);">
        <div class="col-12 bannerm">
          <div class="container-lg d-flex justify-content-center">
            <h1 class=" text-color3">Best offers in town</h1>
          </div>
        </div>
</section>

<div class="container-lg" style="padding-top: 30px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Pizzas</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
  ?>

  <div style="padding: 5%; padding-top: 0%; margin-top: 0%; padding-bottom: 3%" >

    <section id="pasteles" class="container mt-2 ">
          <div class="row">

            <?php
              require_once ("clases/createpizza.php");
            
              foreach($pizzaNormal as $row){?>

                <div class=" col-12 col-md-3 mt-3 ">
                  <img class="card-img-top" src="<?=base_url.'assets/images/'.$row->getPicture()?>" alt="Card image cap">
                  <div class="card-body" style="text-align: center;">
                    <p class="card-text"><?= $row->getName() ?></p>
                    <p class="card-text"><b><?= $row->getPrice() ?>€</b></p>
                    <form action="<?=base_url."pizza/createsession"?>" method="post"> <button class="btn btn-dark" type="submit" name="addtocartM" value="<?= $row->getId() ?>"><b>Add to Cart</b></button></form>
                  </div>
                </div>

              <?php } ?>

            
          </div>
          
    </section>

  </div>


  <?php
    include("arrow/arrowsleft.html");
  ?>
  <div style="float: left; margin: 0%; padding: 0%;"><h2 style="font-size: 33px;">&nbsp;Vegetarian&nbsp;</h2></div>
  <?php
    include("arrow/arrowsrightmenu1.html");
  ?>

<div style="padding: 5%; padding-top: 0%; margin-top: 0%; padding-bottom: 3%" >

  <section id="pasteles" class="container mt-5 ">
        <div class="row">

          <?php
            //require_once ("clases/createpizza.php");
            
            foreach($pizzaVegetarian as $row){ ?>

              <div class=" col-12 col-md-3 mt-3 ">
                <img class="card-img-top" src="<?=base_url.'assets/images/'.$row->getPicture()?>" alt="Card image cap">
                <div class="card-body" style="text-align: center;">
                  <p class="card-text"><?= $row->getName() ?></p>
                  <p class="card-text"><b><?= $row->getPrice() ?>€</b></p>
                  <form action="<?=base_url."pizza/createsession"?>" method="post"> <button class="btn btn-dark" type="submit" name="addtocartMV" value="<?= $row->getId() ?>"><b>Add to Cart</b></button></form>
                </div>
              </div>

            <?php } ?>

          
          
        </div>
        
  </section>

</div>

</div>


