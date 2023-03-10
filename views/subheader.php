<?php
$admin = $_SESSION['user_admin'];
if($admin == 1){?>
    <section class="container-fluid py-5 " style="margin-top: 100px; background-color: #E4D5C5;">
      <div class="container-lg px-3">
        <div class="row px-3-sm d-flex justify-content-center">
            <a onclick="location.href='<?=base_url.'pizza/profile'?>'" class="col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold">Modify data</a>
            <a onclick="location.href='<?=base_url.'pizza/allproduct'?>'" class="col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold">All Products</a>
            <a onclick="location.href='<?=base_url.'pizza/createproduct'?>'" class="col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold">Create Product</a>
            <a onclick="location.href='<?=base_url.'pizza/userorders'?>'" class="col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold">Orders</a>
        </div>
      </div>
    </section>
<?php }else{?>
  <section class="container-fluid py-5 " style="margin-top: 100px; background-color: #E4D5C5;">
    <div class="container-lg px-3">
      <div class="row px-3-sm d-flex justify-content-center">
          <a onclick="location.href='<?=base_url.'pizza/profile'?>'" class="col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold">Modify data</a>
          <a onclick="location.href='<?=base_url.'pizza/userorders'?>'" class="col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold">My Orders</a>
      </div>
    </div>
  </section>
  
<?php }?>
