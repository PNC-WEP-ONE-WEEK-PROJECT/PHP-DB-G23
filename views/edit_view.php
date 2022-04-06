<?php

require_once '../templates/header.php';
// echo 'hello';
require_once '../models/post.php';

?>
<div class="container mt-5">

    <form action="../action/edit.php" method="post" enctype="multipart/form-data">
    <?php
        $post_id=$_GET['edit'];
        $getlist=getbyId($post_id);
    ?>
        <input type="hidden" name="id" value="<?=$post_id?>">
        <div class="form-group">
            <textarea class="title_post" name="post_description" class="form-control" placeholder="You description"><?=$getlist['post_description']?></textarea>
        </div>
        <div class="images">
            <div class="choose_profile">
                <input type="file" class="choose" name="image"  >  </input>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="click_edit">Update Post</button>
        </div>
    </form>
</div>
<?php

?>
