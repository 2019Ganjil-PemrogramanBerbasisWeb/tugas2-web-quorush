<?php

require_once "konfigurasi.php";
//if(isset($_SESSION['access_token'])){
//    $gClient->setAccessToken($_SESSION['access_token']);
//}

if(isset($_GET['code'])){
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
}

$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();

 $_SESSION['name'] = $userData['name'];
 $_SESSION['gambar'] = $userData['picture'];
 $_SESSION['email'] = $userData['email'];
header('Location: welcome.php');
exit();


?>