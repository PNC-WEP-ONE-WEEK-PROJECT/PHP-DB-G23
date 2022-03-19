<?php
require_once 'database.php';
function createPost($post,$image)
{
    global $database;
    $post_description=$_POST['post_description'];
    $post_image=$image['image']['name'];
    $statement=$database->prepare("insert into posts (post_description,post_image) values (:post_description,:post_image)");
    $statement->execute([':post_description' => $post_description,':post_image' => $post_image]);
    return $statement->fetch() >0;
}

function udatePost($post_description,$post_id,$post_image)
{
    global $database;
    // $post_description=$edit['post_description'];
    // $post_id = $edit['post_edit'];
    $statement=$database->prepare("UPDATE posts SET post_description = :post_description,post_image=:post_image WHERE post_id = :post_id");
    $statement->execute([':post_description' => $post_description, ':post_id' => $post_id,':post_image'=>$post_image]);
    return $statement;
}

function deletePost($post_id)
{
    global $database;
    $statement=$database->prepare("delete from posts where post_id = :post_id");
    $statement->execute(['post_id' => $post_id,]);
    return $statement->fetch() >0;
    


}

function getAllPost()
{
    global $database;
    $statement=$database->prepare("select * from posts order by post_id");
    $statement->execute();
    return $statement->fetchAll();
    
}

function getbyId($id){

    global $database;
    $statement = $database->prepare("SELECT * from posts where post_id=:id");
    $statement->execute([':id'=>$id]);
    return $statement->fetch();
}


