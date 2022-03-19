<?php
 require_once '../models/post.php';
//  echo 'hello'; die();
 $post_id= null;
 isset($_GET['post_id'])? $post_id = $_GET['post_id']: $post_id = null;
 if ($post_id !== null){
    deletePost($post_id);
    // echo "$id"; die;
     header('location:../mixs/mix.php');
 }