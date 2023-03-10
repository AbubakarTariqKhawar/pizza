<?php 
if((!isset($_SESSION['user_id'])) and (!isset($_SESSION['user_name']))){?>
   <div  class="row addMore">
                <div class=" col-12 mt-3"    >
                  <div class="addMore1" >
                    <button class="btn btn-dark"  onclick="location.href='<?=base_url.'pizza/menu'?>'"><b>Add More Product</b></button>
                  </div>
                  <div class="buyN" >
                    <button class="btn btn-dark"  onclick="location.href='<?=base_url.'pizza/login'?>'" ><b>Buy Now</b></button>
                  </div>
                </div>
            </div>

      </section>

    </div> 
    
  </div>

 

</div>
<?php }else{?>
    <div  class="row addMore">
                <div class=" col-12 mt-3"    >
                  <div class="addMore1" >
                    <button class="btn btn-dark"  onclick="location.href='<?=base_url.'pizza/menu'?>'"><b>Add More Product</b></button>
                  </div>
                  <div class="buyN" >
                    <button class="btn btn-dark"  onclick="location.href='<?=base_url.'pizza/payment'?>'" ><b>Buy Now</b></button>
                  </div>
                </div>
            </div>

      </section>

    </div> 
    
  </div>

 

</div>
<?php }?>

