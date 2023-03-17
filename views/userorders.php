
<div class="container-lg" style="padding-top: 45px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Your Orders</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
            
            

                  <div class="row">
                    <div class=" col-12 mt-3 " >
                    <table  style="text-align:center;" id="allorderjava">
                      
                    </table>
                    </div>
                  </div>

                  <div class="form-popup" id="myForm">
                    <form  class="form-container">
                      <h1><b>Rate this Order</b></h1>
                      <label for="userId"><b>User ID</b></label>
                      <input type="number" class="nostyle" id="userId" name="userId" value="<?php echo $_SESSION['user_id']; ?>" readonly/>
                      <label for="userId"><b>Order ID</b></label>
                      <input type="number" class="nostyle" id="orderId" name="orderId"  readonly/>
                      <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="5 Star">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="4 Star">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="3 Star">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="2 Star">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="1 Star">1 star</label>
                      </div>
                      </br></br>
                      
                      <h3><b>Comment</b></h3>
                      <textarea class="form-control" id="description" name="description" rows="4" cols="50" required></textarea>
                      </br>
                      <button type="button" class="btn btn-dark" onclick="saveR(document.getElementById('userId').value,document.getElementById('orderId').value,document.getElementsByName('rate'),document.getElementById('description').value)">Save</button>
                      <button type="button" class="btn btn-dark" onclick="closeForm()">Close</button>
                    </form>
                  </div>

      </section>

    </div> 
    
  </div>

 

</div>


<script src="<?=base_url.'node_modules/startform.js'?>"></script>


            

