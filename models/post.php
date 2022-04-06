<?php
require_once 'database.php';
// ----------------------------- insert text and photo add to post-----------
function createPost($post_description,$image)
{
    global $database;
    $statement=$database->prepare("INSERT INTO posts (post_description,post_image) VALUES(:post_description,:post_image)");
    $statement->execute([':post_description' => $post_description,':post_image' => $image]);
    return $statement->fetch() >0;
}

// -------------------------- update post to post-------------
function udatePost($post_description,$post_id,$post_image)
{
    global $database;
    // $post_description=$edit['post_description'];
    // $post_id = $edit['post_edit'];
    $statement=$database->prepare("UPDATE posts SET post_description = :post_description,post_image=:post_image WHERE post_id = :post_id");
    $statement->execute([':post_description' => $post_description, ':post_id' => $post_id,':post_image'=>$post_image]);
    return $statement;
}

// ================ delet post fro post===========
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
    $statement=$database->prepare("SELECT * FROM posts ORDER BY post_id DESC");
    $statement->execute();
    return $statement->fetchAll();
}
// ----------------------------- DISPLAY POST TO BROWSWER--------------
function getbyId($id){
    global $database;
    $statement = $database->prepare("SELECT * FROM posts WHERE post_id=:id");
    $statement->execute([':id'=>$id]);
    return $statement->fetch();
}
// -------------------------------INSERT COMMENT TO USER POST ---------------------
function addcomment($comment_body){
    global $database;
    $statement = $database->prepare('INSERT INTO comments (comment_body) VALUES(:comment_body)');
    $statement->execute([
        ':comment_body'=>$comment_body,
        // ':comment_number'=>$comment_number,
        // ':user_id'=>$user_id,
        // ':post_id'=>$post_id,
       ]);
}
// -------------------------SELECT COMMENT FOR COMMENT TABLE-----------------
function getComment(){
    global $database;
    $statement=$database->prepare('SELECT * FROM comments ORDER BY comment_id DESC');
    $statement->execute();
    return $statement->fetchAll();
}

// ---------------------------- LOGIN AND CHECK USER------------------
function userLogin($userName,$passwords)
{
    global $database;
    $statement=$database->prepare("INSERT INTO users (first_name,passwords) VALUES(:first_name,:passwords)");
    $statement->execute([':first_name'=>$userName,':passwords'=>$passwords]);
    return $statement->fetch()>0;
}

// ------------------------------CREATE USER INTO USER---------------------
function adduser($first_name,$last_name,$email,$passwords,$gender){
    global $database;
    $statement = $database->prepare("INSERT INTO users(first_name,last_name, email, passwords, gender)
    VALUES (:first_name,:last_name,:email,:passwords,:gender)");
    $statement->execute([':first_name' => $first_name, ':last_name' => $last_name,':passwords'=>$passwords,':email'=>$email, ':gender'=>$gender,]);
    return $statement->fetchAll();
}



