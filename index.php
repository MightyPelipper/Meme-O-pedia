<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>

<title>Welcome Home</title>
<link rel="stylesheet" href="style.css">
</head>
    <body>
        <p><h1>Welcome <?php echo $_SESSION['username']; ?>!</h1></p>
            <div class="dashboard">
            <ul>
            <li>Dashboard</li>
            <li><a href="index.php">Home</li>
            <li><a href="candyz.php">Food</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="logout.php">Logout</a></li>
            </div>
    </body>
</html>