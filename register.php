<!DOCTYPE html>
<head>
    <!-- Link the stylesheet-->

    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<?php
$username = $_POST['username'];
$password = $_POST['passowrd'];


	
?>
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
        <li class="navbarlistpos"><a href="memes.php">Memes</a></li>
        <li class="navbarlistpos"><a href="feedback.php">feedback</a></li>
        <li class="navbarlistpos"><a href="about.php">About</a></li>
        <li class="navbarlistpos"><a href="register.php">register</a></li>
        <div class="search-container">
            
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            
        </div>
    </ul> 

    <!--Actual content-->

    <h1 class="registration" align="center">registration</h1>

    

    <div class="card">
    <form action="register recivedpage.php" method="post" id="search">
<p><b>Username:</b><input type="str" name ="username" id="username" value="<?php echo $username?>"/></p><br>
<div>
            <br/>
            password has no restriction but we are not responsible if your account is
            compramised, or banned due to others actions.
            </div>
<p><b>Username:</b><input type="str" name ="passowrd" id="passowrd" value="<?php echo $password?>"/></p><br>
<input type="submit" name="submit" value=" submit"/>
</form>  
    </div>

    
</body>