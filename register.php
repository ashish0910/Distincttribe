<?php
    require_once('db.php');

    if(isset($_POST['name'])){
            $email=$_POST['email'];
            $brandname=$_POST['brandname'];
            $website=$_POST['website'];
            $password=$_POST['password'];
            $password=password_hash($password, PASSWORD_DEFAULT);
            $name=$_POST['name'];
            $query = "INSERT INTO `brand` (`id`, `email`, `brandname`, `brandwebsite`, `name`, `password`) VALUES (NULL, '$email', '$brandname', '$website', '$name','$password')";
            
            if(mysqli_query($connection,$query)) {
                header("location: services.php");
            }else{
                echo "Error!!!";
            }
}
        
    
?>