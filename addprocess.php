<?php
    session_start();
    require_once('db.php');    
    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST)){
        $author = $_POST['author'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $category = $_POST['category'];    
        $date = date('m/d/Y h:i:s a', time());
        $query_add = "INSERT INTO `posts` (`id`, `title`, `image`, `author`, `content`, `category`, `summary`, `date`) VALUES (NULL, '$title', '$image', '$author', '$content', '$category', '$summary', '$date')";
        
        $result = mysqli_query($connection,$query_add);
        $_SESSION['addblog'] = "done" ;
        header("location: editblog.php");
    }
    if(!$result){
        echo "bug";
    }
    else{
        echo "no";
    }
    

?>