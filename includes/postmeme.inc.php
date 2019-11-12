<?php



if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $catagory = mysqli_real_escape_string($conn, $_POST['memecatagory']);
    $text = mysqli_real_escape_string($conn, $_POST['memetext']);
    $pic = mysqli_real_escape_string($conn, $_POST['memepic']);
    
    //store image
    

    
    //error handelers

    //check for empty fields
    if(empty($catagory) ||  empty($text) || empty($pic)  ){

        header("Location: ../postmeme.php?postmeme=empty");
        exit(); 
    
        //insert into database
    } else {
               
        $sql = "INSERT INTO Memes (meme_catagory, meme_text, meme_pic) VALUES ('$catagory', '$text', '$pic' );";

        mysqli_query($conn, $sql);

        header("Location: ../postmeme.php?postmeme=success");
        exit();  
             
    }

} else{
    header("Location: ../postmeme.php?postmeme=fail");
    exit();
}


