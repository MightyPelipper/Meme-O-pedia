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
    Register
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

    <h1 class="textwhite" align="center">Register</h1>


    <div class="card">
    <form class="loginInput" action="includes/register2.inc.php" method="POST" >
        <div class="form">

        <div class="container">
            <div class="textWhite"><h2>Create Account</h2></div>

            <label for="first"><b>First</b></label>
            <input type="text" placeholder="First Name" name="first" >

            <label for="Last"><b>Last</b></label>
            <input type="text" placeholder="Last Name" name="last" >
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="E-mail" name="email" >

            <label for="uid"><b>Username</b></label>
            <input type="text" placeholder="Username" name="uid" >

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Password" name="pwd" >

            <button class="regbutton" type="submit" name="submit">Create User</button>
        </div>
        </div>
    </form>
    </div>

    
</body>