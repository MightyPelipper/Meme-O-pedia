<?php


if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $first =  $_POST['first'];
    $last =   $_POST['last'];
    $email =  $_POST['email'];
    $uid =    $_POST['uid'];
    $pwd =    $_POST['pwd'];



    //check if inputs are empty and filter inputs
    if(empty($uid) || empty($pwd) || empty($first) || empty($last) || empty($email) ) {
        header("Location: ../register.php?register=empty");
        exit();
    } 

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        header("Location: ../register.php?register=invalidmailandusername");
        exit();

    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?register=invalidmailandusername".$uid);
        exit();

    }

    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        header("Location: ../register.php?register=invalidmailandusername".$email);
        exit();

    }

    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $first)){
        header("Location: ../register.php?register=invalidFirstName".$first);
        exit();

    }

    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $last)){
        header("Location: ../register.php?register=invalidLastName".$last);
        exit();

    }


    //now send through database
    else {

        $sql = "SELECT * FROM Users WHERE user_uid=?";
        
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){

            header("Location: ../register.php?login=sqlerror");
            exit();
        }

        else{
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {

                header("Location: ../register.php?error=usertaken=".$uid);
                exit();
            }

            else{
                $sql ="INSERT INTO Users (user_first,user_last,user_email,user_uid,user_pwd) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){

                    header("Location: ../register.php?error=sqlerror");
                    exit();
                }
                else{
                    
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssss", $first,$last,$email,$uid,$hashedPwd);
                    mysqli_stmt_execute($stmt);

                    header("Location: ../register.php?signup=sucsess");
                    exit();
                    

                }
            }


        }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    
}
}
    
else{
    header("Location: ../login.php");
        exit();
}   