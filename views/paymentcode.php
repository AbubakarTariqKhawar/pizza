<?php 
    
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $userAdress = QUERY::getuserAddressByUserId($user_id);
    $userIdPr = $userAdress['AddId'];
    $_SESSION['userAddressIdForOrder'] = $userIdPr;
    $userAdr = $userAdress['AddAddress'];
    $userPostcode = $userAdress['AddPostalCode'];

    $bankmaxID = QUERY::getBankMaxIdbyUser($user_id);
    $bankmaxID = $bankmaxID + 1;

    if($bankmaxID != 1){
      $checkBank = QUERY::getBankByInfo($user_id);

      $bankIdB = $checkBank['BanId'];
      $bankNumberB = $checkBank['BanCardNumber'];
      $banknameB = $checkBank['BanOwnerName'];
      $bankexMB = $checkBank['BanExpireMonth'];
      $bankexYB = $checkBank['BanExpireYear'];
      $bankcvvB = $checkBank['BanCvv'];
      $bankUseIdB = $checkBank['BanUseId'];

    }else{
      $bankIdB = '';
      $bankNumberB = '';
      $banknameB = '';
      $bankexMB = '';
      $bankexYB = '';
      $bankcvvB = '';
      $bankUseIdB = '';

    }

?>