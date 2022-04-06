
<?php
require_once("../models/post.php");

$description = $_POST['post_description'];
$post_id = $_POST['id'];
$images=$_FILES['image']['name'];
echo $images;
echo $description;
echo $post_id;
move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$images);
if(!empty($description)){
    udatePost($description,$post_id,$images);
    header("location: ../mixs/mix.php");

}

?>