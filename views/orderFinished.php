
<section id="banner_principal" class="container-fluid " style="background-image: URL(<?=base_url."assets/images/bcart.webp"?>);">
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


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%; text-align: center;" >

      <p style="font-size: 25px;"><b>Your Order have been Successfully.</b></p>

     <?php
      
     session_destroy();
     
     
     echo ($_COOKIE['lastOrder']);
     $qro = $_COOKIE['lastQrvalue'];
     
     ?>
     <div  class="row " >
                <div class=" col-12 mt-3" >
                  <div>
                    <button type="button" id="qrButton" class="btn btn-dark" onclick="getQr()">QrCode</button>
                  </div>
                  <div class="allqr">

                    <div id="fqr" class="qrcode2"> 
                      <img  src="<?=base_url.'assets/images/qri.svg'?>" alt="qr" height="500" title="qr" />
                    </div>

                    <div id="showQr" class="qrcode1">
                      <img  src="https://api.qrserver.com/v1/create-qr-code/?data='<?=$qro?>'&amp;size=205x205" alt="qr" title="qr" />
                    </div>
                  </div>
                  
                </div>
            </div>

    </div> 
    
    
    
  </div>

 

</div>

<script src="<?=base_url.'assets/js/qrcode.js'?>"></script>

