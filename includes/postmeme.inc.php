<?php

//file upload check

session_start();








//throw all the info then into database

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    
    $catagory = mysqli_real_escape_string($conn, $_POST['memecatagory']);
    $name = mysqli_real_escape_string($conn, $_POST['memename']);
    $text = mysqli_real_escape_string($conn, $_POST['memetext']);
    $pic = mysqli_real_escape_string($conn, $_POST['memepic']);
    
    
    

    
    //error handelers

    //check for empty fields
    if ( empty($catagory) || empty($name) || empty($text) || empty($pic)  ){

        header("Location: ../postmeme.php?postmeme=empty");
        $error = "Empty Fields Try Again";
        $_SESSION["error"] = $error; //send error message
        exit(); 
    
        //insert into database
    } else {
               
        $sql = "INSERT INTO Memes (meme_catagory, meme_name, meme_text, meme_pic) VALUES ('$catagory','$name', '$text', '$pic' );";

        mysqli_query($conn, $sql);

        header("Location: ../postmeme.php?postmeme=success");
        exit();  
             
    }

} else{
    header("Location: ../postmeme.php?postmeme=fail");
    exit();
}


