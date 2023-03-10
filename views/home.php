
<section id="banner_principal" class="container-fluid " style="background-image: URL(<?=base_url.'assets/images/indexb.webp'?>);">
        <div class="col-12 banner">
          <div class="container-lg d-flex">
            <h1 class=" text-color3">CrackPizza All you need</h1>
          </div>
          <div class="container-lg d-flex">
            <h2 class=" text-color3 ml-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; is love and Pizza</h2>
          </div>
          <div class="container-lg d-flex">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="button" onclick="location.href='<?=base_url.'pizza/menu'?>'" class="btn btn-dark">Order Now</button>
            </h2>
          </div>
        </div>
</section>

<div class="container-lg" style="padding-top: 30px;">

  <?php
    include("arrow/arrowsleft.html");
  ?>
  <div style="float: left; margin: 0%; padding: 0%;"><h2 style="font-size: 32px;">&nbsp;Top Pizzas&nbsp;</h2></div>
  <?php
    include("arrow/arrowsright.html");
  ?>

  <div style="padding: 5%; padding-top: 0%;" >

    <section id="pasteles" class="container mt-5 ">
          <div class="row">
            <?php
              require_once ("clases/createpizza.php");
            
              foreach($pizzaNormal as $row){?>

                <div class=" col-12 col-md-3 mt-3 ">
                  <img class="card-img-top" src="<?=base_url.'assets/images/'.$row->getPicture() ?>" alt="Card image cap">
                  <div class="card-body" style="text-align: center;">
                    <p class="card-text"><?= $row->getName() ?></p>
                    <p class="card-text"><b><?= $row->getPrice() ?>€</b></p>
                  <form action="<?=base_url."pizza/createsession"?>" method="post"> <button class="btn btn-dark" type="submit" name="addtocart" value="<?= $row->getId() ?>"><b>Add to Cart</b></button></form>
                  </div>
                </div>

              <?php } ?>

          </div>
          
    </section>

</div>


  <?php
    include("arrow/arrowsleft.html");
  ?>
  <div style="float: left; margin: 0%; padding: 0%;"><h2 style="font-size: 33px;">&nbsp;In Respect&nbsp;</h2></div>
  <?php
    include("arrow/arrowsright.html");
  ?>

  <div style="padding: 5%;">
    <div class="aboutus">
      <img class="imgsizel" src="<?=base_url.'assets/images/logor.webp'?>">
    </div>
    <div class="aboutus aboutust">
      <h3><b>About Us</b></h3></br>
      <p >We got best pizza in town we have vegetarian and </br>
      Non-Vegetarian and you can even make your own </br>
      pizza with all your liking, and belive me you gonna </br>
      love the pizza.</p>
    </div>
  </div>

  
  <?php
    include("arrow/arrowsleft.html");
  ?>
  <div style="float: left; margin: 0%; padding: 0%;"><h2 style="font-size: 30px;">&nbsp;Get Around&nbsp;</h2></div>
  <?php
    include("arrow/arrowsright.html");
  ?>

  <div style="padding: 5%;" class="timedivs">
    <div class="timetable">
      <img src="<?=base_url.'assets/images/time.svg'?>">
    </div>
    <div class="timetablet">
      <h3><b>Time Table</b></h3>
      <button type="button" class="btn btn-secondary" style="font-size: 20px; margin-left: 2.2%; padding-top: 0%; padding-bottom: 0%;">8:00 - 00:00</button>
    </div>
  </div>

</div>

