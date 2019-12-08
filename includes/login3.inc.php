<?php

session_start();

include ('dbh.inc.php');

if(isset($_POST['submit'])) {

    

    $uid = $_POST['username'];
    $pwd = $_POST['password'];

    //error handlers

    //check if inputs are empty
    if(empty($uid) || empty($pwd)) {
        header("Location: ../login.php?login=emptyfields");
        $error = "Empty Username or Password Fields";
        $_SESSION["error"] = $error; //send error message
        exit();
    }

    else{
        $sql = "SELECT * FROM Users WHERE user_uid = '$uid' and user_pwd ='$pwd' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        //login people
        if( $count == 1) {
            
            session_start();
            $_SESSION['userUid']= $uid;
            //test for session control
                        
            header("Location: ../adminmenu.php?login=Succsess");
            exit();
        }
        
        else{
            $error = "Your Username or password is incorrect!!";
            $_SESSION["error"] = $error; //send error message
            header("Location: ../login.php?login=fail");


        }







    }

}