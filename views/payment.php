
<div class="container-lg" style="padding-top: 150px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Payment</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
        <section class="container-lg mt-5">
    
          <div class="row">
              <div class="col-sm-12 col-md-6" >
                <div class="formulario rounded-3" style="background-color: #DFC8B5; padding: 15px;">
                <h2 class=" mb-5 mt-5 " style="font-size: 40px;"><b>Your Address</b></h2>
                    <div class="mb-3 row">
                      <label for="name" class="col-sm-2 col-form-label">Name*</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $user_name; ?>" readonly>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="address" class="col-sm-2 col-form-label">Address*</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $userAdr; ?>" readonly>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="postal" class="col-sm-2 col-form-label">Codigo postal*</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="postal" name="postal" value="<?php echo $userPostcode; ?>" readonly>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="formulario bg-color5 rounded-3" style="background-color: #DFC8B5; padding: 15px;">
                <h2 class=" mb-5 mt-5 " style="font-size: 40px;"><b>Bank Info</b></h2>
                  <form action="<?=base_url."pizza/paymentP"?>" method="post">
                    <div class="mb-3 row">
                      <label for="cardnumber" class="col-sm-2 col-form-label">Card Number*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="number" class="form-control" id="cardnumber" name="cardnumber" max="9999999999999999" value="<?php echo $bankNumberB; ?>" required>
                      </div>
                      <label for="name" class="col-sm-2 col-form-label">Owner Name*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $banknameB; ?>" required>
                      </div>
                      <label for="expiremonth" class="col-sm-2 col-form-label">Expire Month*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="number" class="form-control" id="expiremonth" name="expiremonth" value="<?php echo $bankexMB; ?>" required>
                      </div>
                      <label for="expireYear" class="col-sm-2 col-form-label">Expire Year*</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="expireyear" name="expireyear"  value="<?php echo $bankexYB; ?>" required>
                      </div>
                      <label for="cvv" class="col-sm-2 col-form-label">CVV*</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="cvv" name="cvv"  value="<?php echo $bankcvvB; ?>" required>
                      </div>
                    </div>
                    <div class="mt-5" style="text-align: center;">
                      <input class="btn btn-dark" type="submit" value="Pay Now">
                    </div>
                  </form>
                </div>
              </div> 
          </div>
          <div  class="row totalPT" >
                <div class=" col-11 mt-3" >
                  <div class="totalPT1" >
                    <h3 class="totalPT2 mt-3" ><b>Total Price:</b></h3>
                  </div>
                  <div >
                    <input type="text" class="form-control mt-3 cartselect2" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly value="<?php echo $_SESSION['totalPrice']; ?>€">
                  </div>
                </div>
            </div>
          
        </section>

      </section>

    </div> 
    
  </div>

 

</div>

