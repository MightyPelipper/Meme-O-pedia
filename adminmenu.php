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
    Admin Menu
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

<!--Navigation for catagories-->

<h1 class="textwhite" align="center">Admin Menu</h1>

<div class="row">

<div class="leftcolumn">
<div class="card">
<h2>Welcome <?php echo $_SESSION['userUid']?>   </h2>
      <h3>Admin Powers</h3>
        
      <ul class="memebar">
        <li class="memelistpos"><a href="postimage.php">Upload images</a></li>
        <li class="memelistpos"><a href="postmeme.php">Create Meme</a></li>
        <li class="memelistpos"><a href="register.php">Register Staff</a></li>
        <li class="memelistpos"><a href="updateMeme.php">Update Meme</a></li>
        <li class="memelistpos"><a href="readfeedback.php">Read Feedback</a></li>
        <li class="memelistpos"><a href="includes/logout.inc.php">Log Off</a></li>
        
        
      </ul> 
      

</div>

</div>
</div>
</body>