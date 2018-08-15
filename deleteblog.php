<?php
    session_start();
    require_once('db.php');    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $del_query = "DELETE FROM `posts` WHERE `posts`.`id` = '$id' ";
        $result = $connection->query($del_query) ;
        if($result){
         header("location: editblog.php");
         $_SESSION['blogdelete']="done";     
     }
    if(!$result){
        echo "bug";
    }
    }else{
        echo "no";
    }
    

?>