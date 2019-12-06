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
    People
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

<h1 class="textwhite" align="center">Meme Database</h1>

<div class="row">

<div class="leftcolumn">
<div class="card">
      <h3>Category</h3>

      <ul class="memebar">
        <li class="memelistpos"><a href="events.php">Events</a></li>
        <li class="memelistpos"><a href="people.php">People</a></li>
        <li class="memelistpos"><a href="memes.php">Memes</a></li>
        
      </ul> 



</div>

</div>
<!--The comment sections-->
<div class="rightcolumn">
        <div class="card">
        <form class="loginInput" action="includes/comments.inc.php" method="POST">
        <h2>Comment:</h2>
              <div class="form">  
                <div class="container">


                    <label for="catagory">Select Category:</label><br>
                    <select id="catagory" name="commentcatagory">
                        <option value="Event">Event</option>
                        <option value="People">People</option>
                        <option value="Memes">Meme</option>
                    </select><br><br>


                    <label for="Comment">Comment:</label><br>
                    <input type="text" id="Comment"  name="comment" ><br><br>
                
                    <button class="regbutton" type="submit" name="submit" value="submit">Post Comment</button>
                </div>
            </div>
        </form>
        </div>
        </div>

</div>



           

<!--Compile posts in a loop -->

<?php


            include_once 'includes/dbh.inc.php';
            
            $sql = "SELECT * FROM Memes WHERE meme_catagory ='People'";

            $result = mysqli_query($conn, $sql) or die("bad Query: $sql");

            
            while($row = mysqli_fetch_assoc($result)) {
            
              echo"  <div class='row'>

                <div class='leftcolumn'>
                    <div class='card'>
                    <h3>{$row['meme_name']}</h3>
                    <h5>{$row['meme_catagory']}</h5>
                    <p>{$row['meme_text']}</p>
                    <p>{$row['meme_pic']}</p>";

                    echo "<img class='fakeimg' src='uploads/{$row['meme_pic']}'>";
                    
                echo"
                    </div>
                
                </div>
                </div>";
                
            
            }
           
            
            
            
  ?>  

  <?php
        //generate comments
        $sql = "SELECT * FROM comments WHERE comment_catagory ='People'";

        $result = mysqli_query($conn, $sql) or die("bad Query: $sql");


        while($row = mysqli_fetch_assoc($result)) {

        echo"  <div class='row'>

            <div class='rightcolumn'>
                <div class='card'>
                <div class='loginInput'>
                <h5>Anonymous</h5>
                <h5>{$row['comment_catagory']}</h5>
                <h3>{$row['comment']}</h3>";
                
            echo"
                </div>
            
            </div>
            </div>
            </div>";
            

}

  ?>


  

</body>


