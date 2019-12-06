<?php

session_start();

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    

    
    //error handelers

    //check for empty fields
    if(empty($username) ||  empty($comment)  ){

        header("Location: ../feedback.php?feedback=empty");
        $error = "Empty Fields Try Again";
        $_SESSION["error"] = $error; //send error message
        exit(); 

    } else {
               
        $sql = "INSERT INTO Feedback (feed_user, feed_comm) VALUES ('$username', '$comment' );";

        mysqli_query($conn, $sql);

        header("Location: ../feedback.php?feedback=success");
        exit();  
             
    }

} else{
    header("Location: ../feedback.php?feedback=fail");
    exit();
}



