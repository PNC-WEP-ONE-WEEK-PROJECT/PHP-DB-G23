<?php
require_once '../models/post.php';
if ($_SERVER['REQUEST_METHOD'] =="POST"){
        if(!empty($_POST['comment_body'])){
                $comment_body=$_POST['comment_body'];
                echo $comment_body;
        addcomment($comment_body);    
}
header('location:post_form.php');
}
?>