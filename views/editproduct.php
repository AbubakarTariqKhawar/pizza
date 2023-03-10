
<div class="container-lg" style="padding-top: 45px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Modify product data</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
        <section class="container-lg ">
    
          <section class="container-lg mt-5">
  
            <div class="row">
              
                <div class="col-sm-12">
                  <div class="formulario bg-color5 rounded-3">
                    <h2 class="text-center mb-5" style="font-size: 45px;"><b>Modify product data</b></h2>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label" >ID*</label>
                        <div class="col-sm-10 mb-3">
                          <input type="number" class="form-control" id="id" name="Idm" value="<?php echo $idP;?>" readonly="true">
                        </div>
                        <label for="name" class="col-sm-2 col-form-label" >Name*</label>
                        <div class="col-sm-10 mb-3">
                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $nameP;?>"required>
                        </div>
                        <label for="description" class="col-sm-2 col-form-label" >Description*</label>
                        <div class="col-sm-10 mb-3">
                          <textarea class="form-control" id="description" name="description" rows="4" cols="50" required><?php echo $descriptionP;?></textarea>
                        </div>
                        <label for="quantity" class="col-sm-2 col-form-label" >Quantity*</label>
                        <div class="col-sm-10 mb-3">
                          <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $quantityP;?>"required>
                        </div>
                        <label for="price" class="col-sm-2 col-form-label" >Price(€)*</label>
                        <div class="col-sm-10 mb-3">
                          <input type="number" class="form-control" id="price" name="price" step="0.01" value="<?php echo $priceP; ?>" required>
                        </div>
                        <label for="category" class="col-md-2 col-form-label">Category*</label>
                        <div class="col-sm-10 mb-3">
                          <select class="form-select seleccionable" name="category" id="category" aria-label="category">
                            <option value="1" <?php echo $NonVegetarian;?>>Non Vegetarian</option>
                            <option value="2" <?php echo $Vegetarian;?>>Vegetarian</option>
                          </select>
                        </div>
                        <label for="size" class="col-md-2 col-form-label">Size*</label>
                        <div class="col-sm-10 mb-3">
                          <select class="form-select seleccionable" name="size" id="size" aria-label="size">
                            <option value="S" <?php echo $Small;?>>Small</option>
                            <option value="M" <?php echo $Medium;?>>Medium</option>
                            <option value="L" <?php echo $Large;?>>Large</option>
                          </select>
                        </div>
                        <label for="formFile" class="col-sm-2 col-form-label">Upload Picture*</label>
                        <div class="col-sm-10 mb-3">
                          <input class="form-control" type="file" id="formFile" name="foto"  required>
                        </div>
                      <p class="text-color2" style="font-size: 12px;">*Camps oblitatoris</p>
                      <placeholder=<?=$pm?> <br>
                      <div style="text-align: center;">
                        <input class="btn btn-dark" type="submit" value="Update data">
                      </div>
                    </form>
                  </div>
                </div> 
            </div>
          </section>
        </section>

      </section>

    </div> 
    
  </div>

 

</div>

