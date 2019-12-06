<?php include("includes/auth.inc.php");?>

<!DOCTYPE html>
<head>
    <!-- Link the stylesheet-->

    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<title>
    Feedback
</title>



<body>

    <div class="header">
        <h1>Meme-o-pedia</h1>
    </div>

    <!--navbar--->
    <ul class="navbar">
        <li class="navbarlistpos"><a href="index.php">Home</a></li>
        <li class="navbarlistpos"><a href="catagory.php">Category</a></li>
        <li class="navbarlistpos"><a href="feedback.php">Feedback</a></li>
        <li class="navbarlistpos"><a href="about.php">About</a></li>
        <?php
            //display admin login or admin menu link if logged on
            if(@$_SESSION['userUid']){
                
                echo "<li class='navbarlistpos'><a href='adminmenu.php'>Admin Menu</a></li>";
            }else{
                echo "<li class='navbarlistpos'><a href='login.php'>Admin Login</a></li>";
            }
        ?>
        <div class="search-container">
            
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            
        </div>
    </ul> 
    <!--Actual content-->

    <h1 class="textwhite" align="center">User Feedback</h1>

    <?php
        //generate comments
        include_once 'includes/dbh.inc.php';

        $sql = "SELECT * FROM feedback";

        $result = mysqli_query($conn, $sql) or die("bad Query: $sql");


        while($row = mysqli_fetch_assoc($result)) {

        echo"  <div class='row'>

            <div class='leftcolumn'>
                <div class='card'>
                <div class='loginInput'>
                <h5>User:  {$row['feed_user']}</h5>
                <h3>{$row['feed_comm']}</h3>";
                
            echo"
                </div>
            
            </div>
            </div>
            </div>";
            

}

  ?> 
  <ul class="memebar">
<li class="memelistpos"><a href="adminmenu.php">back to Admin Menu</a></li>
<ul>    

</body>