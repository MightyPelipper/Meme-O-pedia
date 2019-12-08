<?php

session_start();

?>
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
    Home
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

    <!--body content-->

<div class="row">

  <div class="leftcolumn">

        <div class="card">
            <h2>Cutest Thing in Pokemon?</h2>
            <h5>Title description, Oct 18, 2019</h5>
            <div class="wooloo" style="height:200px;"> </div>
            <p>Just look at it! Who would not want to hug that bundle of happiness?!</p>
            <p>Wooloo is a Normal-type Pokémon set to debut in the eight generation of Pokémon games, Pokémon Sword and Shield. 
              After it was revealed in the June 5th, 2019 Nintendo Direct for the games, it quickly became a favorite among Pokémon fans, 
              who appreciated its cute design. </p>
        </div>

        <div class="card">
            <h2>Mr. Stark I Don't Feel So Good</h2>
            <h5>Title description, Oct 20, 2019</h5>
            <div class="spongebob" style="height:200px;"></div>
            <p>Fading away is the new hype.</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>

    </div>

  <div class="rightcolumn">

  
   <!--trending tab--> 
    <div class="card">
      <h3>Trending</h3>
      <div class="trend">Dancing Joker</div><br>
      <div class="trend">Suprised Pikachu</div><br>
      <div class="trend">Todd Howard</div>
    </div>

    <!--social media buttons-->
    <div class="card">
      <h3>Follow Us</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <p>Some text..</p>
    </div>

  <div class="card">
  <!--login form-->
    <p>Admin Login</p>
    <a href="login.php" class="regbutton">Admin Login</a>
    </div>

  </div>

</div>

</body>