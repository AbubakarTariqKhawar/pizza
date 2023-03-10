<?php 
    
     if(isset($_POST['cardnumber'])){
      $user_id = $_SESSION['user_id'];
      
      $cardnumber = $_POST['cardnumber'];
      $name = $_POST['name'];
      $expiremonth = $_POST['expiremonth'];
      $expireyear = $_POST['expireyear'];
      $cvv = $_POST['cvv'];

      $bankMaxIdById = QUERY::getuserMaxId('BanId','bank');
      $bankMaxIdById = $bankMaxIdById + 1;

      $insert_bank = QUERY::insertbank($bankMaxIdById,$cardnumber,$name,$expiremonth,$expireyear,$cvv,$user_id);

      header("Location:".base_url."pizza/saveorder");
    }

?>