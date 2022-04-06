<?php
require_once '../models/post.php';
// echo 'hello';
echo "<pre>";
print_r($_FILES['image']) ;
echo "</pre>";
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    if (!empty($_POST['post_description'])){
        //print_r($_post);
        createPost($_POST,$_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
    } 
}
header('location:../index.php');
?>

