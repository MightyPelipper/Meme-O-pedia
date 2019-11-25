<?php


session_start();
if(!isset($_SESSION['userUid'])){
header("Location: /ics311project/index.php");
exit(); }







?>