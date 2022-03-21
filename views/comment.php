<?php
require_once '../models/post.php';
// $comment=$_POST['comment_body'];
if ($_SERVER['REQUEST_METHOD'] =="POST"){
        if(!empty($_POST['comment_body'])){
                $comment_body=$_POST['comment_body'];
                // $comment_number=$_POST['comment_number'];
                // $user_id= $_POST['user_id'];
                // $post_id=$_POST['post_id'];
                addcomment($comment_body);    
}
header('location:post_form.php');
}
?>