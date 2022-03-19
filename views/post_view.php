<div class="container">
<?php
?>
<div class="container" mt-3>
    <?php

    $posts=getAllPost();
    //print_r($posts);
 foreach($posts as $post):
    ?>
    <div class="card">
        <div class="card-body">

            <div class="both_account">
                <div class="pict_profile">
                    <img class="imgese" src="../profile_image/dog-g74222f906_1920.jpg" alt="">
                </div>
                <div class="acount">
                    <span class="name_accoount">Heng-Naong</span>
                    <h6 class="datetime">show data timer</h6>
                </div>
            </div>
            <div class="add_text">
                <a class="adding" href="edit_view.php?post_id= "<? $post['post_id'] ?>" class="card-link"><i class="fas fas far fa-edit fa-2x"></i></a>
                <a class="adding" href="action/delete.php?post_id=<?= $post['post_id'] ?>" class="card-link"><i class="fa fas fa-trash fa-2x"></i></a>
            </div>
            <div class="text_card">
                <p class="card_text"><?= $post['post_description'] ?></p>
            </div>
            <img class="Image_add" src="images/<?=$post['post_image']?>">
            <div class="like_comment_share">
                <div class="likes">
                    <div class="like"><a href=""><i class="fas fas fa-thumbs-up fa-1x"></i></a> Like</div>
                    <div class="like_number">12</div>
                </div>
                <div class="comments">
                    <div class="comment"> <a href=""><i class="fas fas fa-comment-alt fa-1x"></i></a> Comment</div>
                    <div class="comment_number">12</div>
                </div>
                <div class="shares">
                    <div class="share"><a href=""><i class="fas fas fa-share fa-1x"></i></a> Share</div>
                    <div class="share_number">12</div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

?>
</div>
