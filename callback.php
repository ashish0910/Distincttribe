<?php
    session_start();
    if(isset($_GET['error'])){
        header("location: services.php");
        exit();
    }
    require "instagramAPI.php" ;
    $_SESSION['loggedin'] = 1;
    $data = $Instagram->getAccessTokenAndUserDetails($_GET['code']) ;
    $_SESSION['accessToken'] = $data['access_token'];
    $_SESSION['id'] = $data['user']['id'];
    $_SESSION['username'] = $data['user']['username'];
    $_SESSION['profile_picture'] = $data['user']['profile_picture'];
    $_SESSION['full_name'] = $data['user']['full_name'];
    $_SESSION['bio'] = $data['user']['bio'];
    header("location: final.php");
?>