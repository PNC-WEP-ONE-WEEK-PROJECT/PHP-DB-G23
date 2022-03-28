<?php
require_once '../templates/header.php';
require_once '../models/post.php';
// $userName=$_POST['first_name'];
// $passwords=$_POST['passwords'];
if ($_SERVER['REQUEST_METHOD'] =="POST")
    addUserInput($userName,$passwords);

?>


