<?php
    session_start();
if(isset($_SESSION['loggedin'])){
    if($_SESSION['loggedin']==1){
        echo $_SESSION['username']."<br>".$_SESSION['full_name']."<br>";
        ?>
        <img src="<?php  echo $_SESSION['profile_picture'] ;  ?>" alt="">
        <h1>We are under mantainance for this section of our website.</h1>
        <?php
    }
}
else if(isset($_SESSION['glog'])){
    if($_SESSION['glog']){
        echo $_SESSION['email']."<br>".$_SESSION['givenName']."<br>".$_SESSION['gender']."<br>".$_SESSION['familyName']."<br>" ;
        ?>
        <img src="<?php echo $_SESSION['picture'] ; ?>" alt=""><?php
    }
}
else if(isset($_SESSION['log'])){
    if($_SESSION['log']==1){
        echo $_SESSION['email'] . "<br>" . $_SESSION['brandname'] . "<br>" . $_SESSION['website'] . "<br>" . $_SESSION['name'] . "<br>";
        ?>
        <h1>We are under mantainance for this section of our website.</h1><?php
    }
}
else {
    header("location: services.php");
}
?>