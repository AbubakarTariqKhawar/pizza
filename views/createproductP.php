<?php 
    $id_User = $_SESSION['user_id'];
    
    $productMaxId = QUERY::getuserMaxId('ProId','product');
    $productMaxId = $productMaxId + 1;
    
    $idP = $productMaxId;
  
    $pm = '';


    
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
    
            $insert_product = QUERY::createProduct($id,$name,$description,$quantity,$price,$category,$size,$srcimg);
            $pm = "<p><b>Product have been created successfully</b></p>";
            
          }else{
            $pm = "<p><b>The file does not have the appropriate format.error</b></p>";
            //header("Refresh:0");
          }

          
      }


    
?>