
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
    Login Portal
</title>



<body>

    <div class="header">
        <h1>Meme-o-pedia</h1>
    </div>

    <!--navbar--->
    <ul class="navbar">
        <li class="navbarlistpos"><a href="index.php">Home</a></li>
        <li class="navbarlistpos"><a href="catagory.php">Catagory</a></li>
        <li class="navbarlistpos"><a href="feedback.php">feedback</a></li>
        <li class="navbarlistpos"><a href="about.php">About</a></li>
        <div class="search-container">
            
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            
        </div>
    </ul> 
    <!--Actual content-->

    <h1 class="textwhite" align="center">Login</h1>

<!--feedback form on the right side-->


        <div class="card">
        <form class="loginInput" action="includes/login2.inc.php" method="POST">
              <div class="form">  
                <div class="container">
                    <!--login form-->
    
                    <form class="loginInput">
                    <h3>Adminisrator Login</h3>
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Username"  ><br>

                        <p>Password</p>
                        <input type="password" name="password" placeholder="Password" ><br>
                        
                        <input type="submit" value="login" class="loginbutton" name="submit">
                    
                    </form>
                    
                <?php
                //error checking
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  

                    
    
                </div>
            </div>
        </form>


</body>

<?php
    unset($_SESSION["error"]);
?>