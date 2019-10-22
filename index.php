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
    Home id here
</title>



<body>

    <div class="header">
        <h1>Meme-o-pedia</h1>
    </div>

    <!--navbar--->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="memes.php">Memes</a></li>
        <li><a href="feedback.php">feedback</a></li>
        <li><a href="about.php">About</a></li>
        <div class="search-container">
            
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            
        </div>
    </ul> 

    <!--body content-->

<div class="row">

  <div class="leftcolumn">

        <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Oct 18, 2019</h5>
            <div class="fakeimg" style="height:200px;">Image </div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>

        <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Oct 20, 2019</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>

    </div>

  <div class="rightcolumn">

  <div class="card">

  <!--login form-->
    <form>
      <h3>Login</h3>
        Username: <input type="text" name="username" ><br>
        Password: <input type="text" name="password"><br>
        <input type="submit" value="submit">
      <p>Some text..</p>
    </form>
    </div>
   <!--trending tab--> 
    <div class="card">
      <h3>Trending</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>

    <!--social media buttons-->
    <div class="card">
      <h3>Follow Us</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <p>Some text..</p>
    </div>

  </div>

</div>

</body>