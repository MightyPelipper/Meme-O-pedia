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
        <div class="search-container">
            
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            
        </div>
    </ul> 
    <!--Actual content-->

    <h1 class="textwhite" align="center">Feedback</h1>

<!--feedback form on the right side-->


        <div class="card">
        <form class="loginInput" action="includes/feedback.inc.php" method="POST">
              <div class="form">  
                <div class="container">
                    <label for="username">Username:</label>
                    <input type="text" id="Username" name="username" placeholder="Username">
                    

                    
                    
                    
                    
                    
                    <label for="Comment">Comment:</label><br>
                    <input type="text" id="Comment"  name="comment" ><br><br>
                    
                    
                   
                    <button class="regbutton" type="submit" name="submit" value="submit">submit</button>
                </div>
            </div>
        </form>


</body>