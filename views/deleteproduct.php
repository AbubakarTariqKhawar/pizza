
<?php 

    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        
        $productselected = QUERY::getProById($id);

        
        $foto = $productselected['ProPicture'];

        $productDelete = QUERY::deleteProductById($id);
        
        /* delete picture from file

        $archivo = base_url.'assets/images/uploads/'.$foto; 
        unlink($archivo);
        */
    
        header("Location:".base_url."pizza/allproduct");
    }else{
        header("Location:".base_url."pizza/index");
    }
    
?>