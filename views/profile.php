
<div class="container-lg" style="padding-top: 45px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Modify data</b></h2>
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
              <div class="col-sm-12">
                <div class="formulario rounded-3">
                  <h2 class="text-center mb-5 " style="font-size: 45px;"><b>Modify data</b></h2>
                  <form action="" method="post" >
                    <div class="mb-3 row">
                      <label for="nom" class="col-sm-2 col-form-label">Name*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="text" class="form-control" id="nom" name="name" value="<?php echo $username; ?>" required>
                      </div>
                      <label for="cognom" class="col-sm-2 col-form-label">Surname*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="text" class="form-control" id="cognom" name="surname" value="<?php echo $usersurname; ?>" required>
                      </div>
                      <label for="mobile" class="col-sm-2 col-form-label">Mobile*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $userphone; ?>" max="999999999" required>
                      </div>
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="staticEmail" name="email" value="<?php echo $useremail; ?>" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password*</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" value="<?php echo $userpass; ?>" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputPassword2" class="col-sm-2 col-form-label">Repeat Password*</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword2" name="rpassword" value="<?php echo $userpass; ?>" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="address" class="col-sm-2 col-form-label">Address*</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $userAdr; ?>" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="postalcode" class="col-sm-2 col-form-label">Postal Code*</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="postalcode" name="postalcode" value="<?php echo $userPostcode; ?>" required>
                      </div>
                    </div>
                    <p class="text-color2" style="font-size: 12px;">*Camps oblitatoris</p>
                    <placeholder=<?=$passwordincorrect?> <br>
                    <placeholder=<?=$emailexcits?> <br>
                    <placeholder=<?=$Userhavebeen?> <br>
                    <div style="text-align: center;">
                      <input class="btn btn-dark" type="submit" name="modificardades" value="Modify data">
                    </div>
                  </form>
                </div>
              </div> 
          </div>
        </section>

      </section>

    </div> 
    
  </div>

 

</div>

