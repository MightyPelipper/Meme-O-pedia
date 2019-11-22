<?php
include("auth.php");
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<p><h1><?php echo $_SESSION['username']; ?>!</h1></p>
            <div class="dashboard">
            <ul>
            <li>Dashboard</li>
            <li><a href="index.php">Home</li>
            <li><a href="candyz.php">Food</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="logout.php">Logout</a></li>
            </div>

            <br>

<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit"> 
 </td>
</tr>
</table>
</form>

</body>
</html>