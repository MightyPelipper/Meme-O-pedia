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
    Post Meme
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

<!--Submission Form-->

<h1 class="textwhite" align="center">Meme Submission</h1>

<div class="row">

<div class="leftcolumn">
<div class="card">
     
     <form class="loginInput" action="includes/postmeme.inc.php"  method="POST">
     
        <label for="catagory">Select Catagory:</label><br>
        <select id="catagory" name="memecatagory">
            <option value="Event">Event</option>
            <option value="People">People</option>
            <option value="Memes">Meme</option>
        </select><br><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title"  name="memename" ><br><br>

        <label for="description">description:</label><br>
        <input type="text" id="description"  name="memetext" ><br><br>

        
        
        <label for="fileselect">Select Image to store thats has already been uploaded:</label><br>
        <input type="file" name="memepic" id="fileselect"><br><br>
        
        <button class="regbutton" type="submit" name="submit" value="submit">Post Submission</button>


     </form>
    
        

</div>

</div>
</div>





</body>



