<?php 
    $id_User = $_SESSION['user_id'];
    
    $productMaxId = QUERY::getuserMaxId('ProId','product');
    $productMaxId = $productMaxId + 1;
    
    $idP = '';
    $nameP = '';
    $descriptionP = '';
    $quantityP = '';
    $priceP = '';
    $NonVegetarian = '';
    $Vegetarian = '';
    $Small = '';
    $Medium = '';
    $Large = '';
    $pictureP = '';

    $pm = '';

    
     

    if(isset($_POST['edit'])){
      $product_id = $_POST['edit'];

      

      $productselected = QUERY::getProById($product_id);

      $idP = $productselected['ProId'];
      $nameP = $productselected['ProName'];
      $descriptionP = $productselected['ProDescription'];
      $pictureP = $productselected['ProPicture'];
      $quantityP = $productselected['ProQuantity'];
      $sizeP = $productselected['ProSize'];
      $categoryP = $productselected['ProCatId'];
      $priceP = $productselected['ProPrice'];

        
      if($sizeP == "S"){
        $Small = "selected";
        $Medium = "";
        $Large = "";

      }elseif($sizeP == "M"){
        $Small = "";
        $Medium = "selected";
        $Large = "";

      }elseif($sizeP == "L"){
        $Small = "";
        $Medium = "";
        $Large = "selected";
        
      }else{
        $Small = '';
        $Medium = '';
        $Large = '';
      }


      if($categoryP == 1){
        $NonVegetarian = "selected";
        $Vegetarian = "";

      }elseif($categoryP == 2){
        $NonVegetarian = "";
        $Vegetarian = "selected";

      }else{
        $NonVegetarian = "";
        $Vegetarian = "";
      }
      
    }

    

    
      if(isset($_POST['name'])){

        $id = $_POST['Idm'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $size = $_POST['size'];
      
          if ((($_FILES["foto"]["type"] == "image/jpeg") || ($_FILES["foto"]["type"] == "image/png") || ($_FILES["foto"]["type"] == "image/webp"))) {

            $srcimg = $_FILES['foto']['name'];
            $ruta = 'assets/images/'. $srcimg;
            $resultado2 = move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);
    
            $insert_product = QUERY::updateProduct($id,$name,$description,$quantity,$price,$category,$size,$srcimg);
            $pm = "<p><b>Product data has been successfully modified.</b></p>";
            
          }else{
            $pm = "<p><b>The file does not have the appropriate format.error</b></p>";
            //header("Refresh:0");
          }
          
          
      }


    
?>