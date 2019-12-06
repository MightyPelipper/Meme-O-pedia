<?php

session_start();

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $catagory = mysqli_real_escape_string($conn, $_POST['commentcatagory']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    

    
    //error handelers
    //htmlspecialchars();
    //htmlentities();
    //check for empty fields
    if(empty($catagory) ||  empty($comment)  ){

        header("Location: ../catagory.php?comment=empty");
        $error = "Empty Fields in comment submission try again";
        $_SESSION["error"] = $error; //send error message
        exit(); 

    } else {
               
        $sql = "INSERT INTO comments (comment_catagory, comment) VALUES ('$catagory', '$comment' );";

        mysqli_query($conn, $sql);

        header("Location: ../catagory.php?comment=success");
        exit();  
             
    }

} else{
    header("Location: ../catagory.php?feedback=fail");
    exit();
}