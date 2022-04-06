<?php

require_once '../models/post.php';
// echo 'hello';
echo "<pre>";
print_r($_FILES['image']) ;
echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $file_name = $_FILES['image']['name'];
    $folder="../images/".$file_name ;
    echo $file_name;
    $post_description=$_POST['post_description'];
    if (!empty($post_description)){
        //print_r($_post);
        createPost($post_description,$file_name);
        move_uploaded_file($_FILES['image']['tmp_name'],$folder);
    }
}
header('location:../mixs/mix.php');
?>  

