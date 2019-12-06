<?php

session_start();


if (isset($_POST['submit'])){

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.' , $fileName );
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg' , 'png');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){
            if($fileSize < 2000000){

                $fileNameNew = $fileName ;
                $fileDestination= '../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ../postimage.php?uploadSucsess");
                $error = "Upload Sucsess!";
                $_SESSION["error"] = $error; //send error message

            } else {
                echo "Your file is too BIG!!";
                header("Location: ../postimage.php?uploadSucsess");
                $error = "Your Image is too BIG!!";
                $_SESSION["error"] = $error; //send error message
            }

        } else {
            echo "There was an error uploading your file!!";
            header("Location: ../postimage.php?uploadSucsess");
            $error = "Error Uploading your File";
            $_SESSION["error"] = $error; //send error message
        }


    } else{

        echo "You cannot upload files of this type!!";
        header("Location: ../postimage.php?uploadSucsess");
        $error = "You Cannot Upload Files of This Type";
        $_SESSION["error"] = $error; //send error message

    }

}