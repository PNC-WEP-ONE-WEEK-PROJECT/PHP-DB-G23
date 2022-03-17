<?php
require_once 'database.php';
function createPost($post,$image)
{
    global $database;
    $post_description=$_POST['post_description'];
    $post_image=$image['image']['name'];
    $statement=$database->prepare("INSERT INTO posts (post_description,post_image) VALUES (:post_description,:post_image)");
    $statement->execute([':post_description' => $post_description,':post_image' => $post_image]);
    return $statement->fetch() >0;
}
function udatePost($edit)
{
    global $database;
    $post_description=$edit['post_description'];
    $post_id = $edit['post_edit'];
    $statement=$database->prepare("UPDATE posts SET post_description = :post_description WHERE post_id = :post_id");
    $statement->execute([':post_description' => $post_description, 'post_id' => $post_edit,]);
}
function deletePost($post_id)
{
    global $database;
    $statement=$database->prepare("DELETE FROM posts WHERE post_id = :post_id");
    $statement->execute(['post_id' => $post_id,]);
    return $statement->fetch() >0;
}
function getAllPost()
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts ORDER BY post_id");
    $statement->execute();
    return $statement->fetchAll(); 
}
function getPost()
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts WHERE post_id = :post_id");
    $statement->execute(['post_id' => $post_id,]);
    return $statement->fetch();
}


