<?php

session_start();

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    

    
    //error handelers
    //check for empty fields
    if(empty($first) ||  empty($last) ||  empty($email) || empty($uid) || empty($pwd)    ){

        header("Location: ../register.php?register=empty");
        $error = "Empty Fields Try Again";
        $_SESSION["error"] = $error; //send error message
        exit(); 

    } else {
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) ||  !preg_match("/^[a-zA-Z]*$/", $last)){

            header("Location: ../register.php?register=invalid");
            $error = "Invalid characters";
        $_SESSION["error"] = $error; //send error message
            exit(); 

        } else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                header("Location: ../register.php?register=email");
                $error = "Incorrect Email Format";
                $_SESSION["error"] = $error; //send error message
                exit(); 
            } else{
                $sql = "SELECT * FROM Users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    
                    header("Location: ../register.php?register=usertaken");
                    $error = "Username Taken Try Again";
                    $_SESSION["error"] = $error; //send error message
                    exit();

                } else {
                    //hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO Users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd' );";

                    mysqli_query($conn, $sql);

                    header("Location: ../register.php?register.php=success");
                    exit();

                }
            }
        }
    }

} else{
    header("Location: ../register.php");
    exit();
}