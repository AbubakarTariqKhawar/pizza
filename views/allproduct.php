
<div class="container-lg" style="padding-top: 45px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>All Productes</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
        <section class="container-lg ">
          
          <section id="pasteles" class="container  ">
                <div class="row">
                  <?php
                    require_once ("clases/createpizza.php");
                  
                    foreach($allProduct as $row){?>

                      <div class=" col-12 col-md-3 mt-5 ">
                        <img class="card-img-top" src="<?=base_url.'assets/images/'.$row->getPicture() ?>" alt="Card image cap">
                        <div class="card-body" style="text-align: center;">
                          <p class="card-text"><b><?= $row->getName() ?></b></p>
                          <p class="card-text">Price: <?= $row->getPrice() ?>€, Quantity: <?= $row->getQuantity() ?>, Size: <?= $row->getSize() ?>, Category: <?= $row->getCategoryName() ?></p>
                          <div class="card-body d-flex justify-content-center">
                            <form action="<?=base_url."pizza/editproduct"?>" method="post"> <button class="card-link btn btn-secondary" type="submit" name="edit" value="<?= $row->getId() ?>"><b>Edit</b></button></form>&nbsp;&nbsp;&nbsp;&nbsp;
                            <form action="<?=base_url."pizza/deleteproduct"?>" method="post"> <button class="card-link btn btn-danger" type="submit" name="delete" value="<?= $row->getId() ?>"><b>Delete</b></button></form>
                          </div>  
                        </div>
                      </div>

                    <?php } ?>

                </div>
                
          </section>
        </section>

      </section>

    </div> 
    
  </div>

 

</div>

