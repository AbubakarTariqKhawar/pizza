

<div class="container-lg" style="padding-top: 150px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Reviews</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
      <label style="font-size: 25px; ">
        <b>Choose Arder:</b>
          <select style="margin-top: 2px;" class="form-select  cartselect arder" name="arder">
            <option value="asc">ASC</option>
            <option value="desc">DESC</option>
          </select>
      </label>
      </br>
      </br>
      <div id="showReview"></div>
            
      </section>

    </div> 
    
  </div>

 

</div>

<script src="<?=base_url.'assets/js/review.js'?>"></script>

            

