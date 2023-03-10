<?php 
    
    $id = $_SESSION['user_id'];
    $user = QUERY::getuserById($id);
    $userAdress = QUERY::getuserAddressByUserId($id);
    $useraddMaxId = QUERY::getuserMaxId('AddId','address');
    $useraddMaxId = $useraddMaxId + 1;
    
    $bcrypt = new Bcrypt(15);
    
    $username = $user['UseName'];
    $usersurname = $user['UseSurname'];
    $useremail = $user['UseEmail'];
    $userpass = $user['UsePassword'];
    $userphone = $user['UsePhone'];
    $userpic = $user['UsePic'];
    $useradmin =$user['UseIsAdmin'];

  
    if($useraddMaxId == 1){
      $userAdr = '';
      $userPostcode = '';
    }else{
      $userAdId = $userAdress['AddId'];
      $userAdr = $userAdress['AddAddress'];
      $userPostcode = $userAdress['AddPostalCode'];
    }
    

    
    $passwordincorrect = "";
    $emailexcits = "";
    $Userhavebeen = "";

    if(isset($_COOKIE['datosm'])){
      $datosm = $_COOKIE['datosm'];
    }else{
      $datosm = "";
    }
    

    if(isset($_POST['name'])){
      
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $rpassword = $_POST['rpassword'];
      $address = $_POST['address'];
      $postalcode = $_POST['postalcode'];

      $checkmail = QUERY::getCheckUserEmail($email);

      if ($password == $rpassword){
        if($password == $userpass){
          $hash = $password;
        }else{
          $hash = $bcrypt->hash($password);
        }
        
        $passwordincorrect = "";
        if (($checkmail != $email) || ($useremail == $email) ){
          $emailexcits = "";
          $update_user = QUERY::updateUserById($id,$name,$surname,$mobile,$email,$hash);
          if($useraddMaxId == 1){
            $insert_address = QUERY::insertAddress($useraddMaxId,$address,$postalcode,$id);
          }else{
            $update_address = QUERY::updateAddress($useraddMaxId,$address,$postalcode,$id);
          }
          
          $_SESSION['user_id']=$id;
          $_SESSION['user_name']=$name;
          $_SESSION['user_admin']=$useradmin;
          $Userhavebeen = "<p><b>User have been modifyied, to see changes please refresh the page.</b></p>";
          //header("Refresh:0");
          //header("Location:".base_url."pizza/profileruta");
        }else{
          $emailexcits = "<p><b>With this email, the user already exists</b></p>";
        }
  
      }else{
        $passwordincorrect = "<p><b>Passwords do not match</b></p>";
      } 
    }

?>