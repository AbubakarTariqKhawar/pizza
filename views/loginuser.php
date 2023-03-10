<?php

$id_persona = QUERY::getuserMaxId('UseId','users');
$id_persona = $id_persona + 1;
$useraddMaxId = QUERY::getuserMaxId('AddId','address');
$useraddMaxId = $useraddMaxId + 1;
$bcrypt = new Bcrypt(15);



$passwordincorrect = "";
$emailexcits = "";
$emailnot = "";

if(isset($_COOKIE['usermail'])){
  $usermail = $_COOKIE['usermail'];
}else{
  $usermail = "";
}

if(isset($_COOKIE['usercreating'])){
  $usercreating = $_COOKIE['usercreating'];
}else{
  $usercreating = "";
}

if(isset($_POST['name'])){
  $id = $id_persona;
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $address = $_POST['address'];
  $postalcode = $_POST['postalcode'];
  $UseIsAdmin = 0;

  $checkmail = QUERY::getCheckUserEmail($email);
     
  if ($password == $rpassword){
    $passwordincorrect = "";
    if ($checkmail != $email){
      $emailexcits = "";
      $hash = $bcrypt->hash($password);
      $insert_user = QUERY::insertUser($id,$name,$surname,$email,$hash,$mobile,$UseIsAdmin);
      $insert_address = QUERY::insertAddress($useraddMaxId,$address,$postalcode,$id);
      
        setcookie("usermail", "$email", time() + 60);
        setcookie("usercreating", $insert_user , time() + 2);
      
      header("Refresh:0");
      //header("Location:".base_url."pizza/login");
    }else{
      $emailexcits = "<p><b>With this email, the user already exists</b></p>";
      //header("Location:".base_url."pizza/login");
    } 

  }else{
    $passwordincorrect = "<p><b>Passwords do not match</b></p>";
    //header("Location:".base_url."pizza/login");
  } 

}

if(isset($_POST['loginmail'])){
  $loginmail = $_POST['loginmail'];
  $loginpass = $_POST['loginpass'];


  $checklogin = QUERY::getCheckUserLogin($loginmail);

  $listid = $checklogin['UseId'];
  $listname = $checklogin['UseName'];
  $listsurname = $checklogin['UseSurname'];
  $listemail = $checklogin['UseEmail'];
  $listpass = $checklogin['UsePassword'];
  $listphone = $checklogin['UsePhone'];
  $listpic = $checklogin['UsePic'];
  $listadmin =$checklogin['UseIsAdmin'];

  $isGood = $bcrypt->verify($loginpass, $listpass);

  if($isGood == true){
    $emailnot = "";
    //session_start();
    $_SESSION['user_id']=$listid;
    $_SESSION['user_name']=$listname;
    $_SESSION['user_admin']=$listadmin;
    header("Location:".base_url."pizza/profile");
  }else{
    $emailnot = "<p><b>Incorrect username and/or password</b></p>";
    //header("Location:".base_url."pizza/login");
  }

}


?>