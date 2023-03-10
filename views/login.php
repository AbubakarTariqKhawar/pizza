
<div class="container-lg" style="padding-top: 150px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>LogIn/Register</b></h2>
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
                  <h2 class="text-center mb-5 " style="font-size: 45px;"><b>LogIn</b></h2>
                  <form action="" method="post">
                    <div class="mb-3 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="staticEmail" name="loginmail" value="<?php echo $usermail; ?>" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputPassword" class="col-sm-2 col-form-label mw-300" >Password*</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="loginpass" required>
                      </div>
                    </div>
                    <p class="text-color2" style="font-size: 12px;">*Obligatory camps</p>
                    <placeholder=<?=$emailnot?> <br>
                    <div style="text-align: center;">
                      <input class="btn btn-dark" type="submit" value="LogIn">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="formulario bg-color5 rounded-3" style="background-color: #DFC8B5; padding: 15px;">
                  <h2 class="text-center mb-5" style="font-size: 45px;"><b>Register</b></h2>
                  <form action="" method="post">
                    <div class="mb-3 row">
                      <label for="nom" class="col-sm-2 col-form-label">Name*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="text" class="form-control" id="nom" name="name" required>
                      </div>
                      <label for="cognom" class="col-sm-2 col-form-label">Surname*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="text" class="form-control" id="cognom" name="surname" required>
                      </div>
                      <label for="staticEmail" class="col-sm-2 col-form-label">Mobile*</label>
                      <div class="col-sm-10 mb-3">
                        <input type="number" class="form-control" id="mobile" name="mobile" max="999999999" required>
                      </div>
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="staticEmail" name="email" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password*</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputPassword2" class="col-sm-2 col-form-label">Repeat Password*</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword2" name="rpassword" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="address" class="col-sm-2 col-form-label">Address*</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="postalcode" class="col-sm-2 col-form-label">Postal Code*</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="postalcode" name="postalcode" required>
                      </div>
                    </div>
                    <p class="text-color2" style="font-size: 12px;">*Obligatory camps</p>
                    <placeholder=<?=$passwordincorrect?> <br>
                    <placeholder=<?=$emailexcits?> <br>
                    <placeholder=<?=$usercreating?> <br>
                    <div style="text-align: center;">
                      <input class="btn btn-dark" type="submit" value="Register">
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

