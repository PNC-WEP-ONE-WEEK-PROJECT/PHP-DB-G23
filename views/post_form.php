<?php
require_once '../templates/header.php';
require_once '../models/post.php';
require_once 'comment.php';
$getComment=getComment();
?>
<div class="bar">
    <div class="bar_fornt">
         <a href="../action/done.php"><i class="fas fa-home fa-2x"></i></a>
        <a href=""><i class="fas fas fa-users fa-2x"></i></a>
        <a href=""><i class="fas fas fa-video fa-2x"></i></a>
        <a href=""><i class="fas fas fa-shopping-cart fa-2x"></i></a>
        <a href=""><i class="fas fas fa-bell fa-2x"></i></a>
        <a href=""><i class="fas fas fa-bars fa-2x"></i></a>
    </div>
</div>
<!-- Chard insert text and photor  to post ================= -->
<div class="getback"><a class="backs" href="../logins/login.php"><i class="far fa-arrow-alt-circle-left"></i></a></div>
<div class="container mt-3">
    <form action="../action/create_post.php"method="post" enctype="multipart/form-data">
        <div class="form-group">
            <span class="text_post">Your text post here</span>
            <textarea class="title_post" name="post_description" class="form-control" placeholder="You description"></textarea>
        </div>
        <div class="images">
            <div class="choose_profile">
                <input type="file" class="choose" name="image" id="Image" value="Image"> </input>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="click_post">Post</button>
        </div>
    </form>
</div>
<div class="containere" mt-3>
    <?php
    $posts=getAllPost();
    foreach($posts as $post):
    ?>
    <div class="card">
        <div class="card-body">
            <div class="both_account">
                <div class="pict_profile">
                    <img class="imagess hiden" src="../profile_image/dog-g74222f906_1920.jpg" alt="">
                </div>
                <div class="acount">
                    <span class="name_accoount">Heng-Naong</span>
                    <?php
                        $date = date_create($post['post_date']);
                        ?>
                        <p class="datetime"><?= date_format($date, '\ D,j,Y'); ?></p>
                        <div class="add_font">
                <a class="adding" href="../views/edit_view.php?edit= <?=$post['post_id'] ?>" class="card-link"><i class="fas fas far fa-edit fa-1x cons"></i></a>
                <a class="adding" href="../action/delete.php?post_id=<?= $post['post_id'] ?>" class="card-link"><i class="fa fas fa-trash fa-1x cons"></i></a>
                <a class="adding" href="../action/done.php" class="card_link"><i></i>Done</a>
            </div>
                </div>
            </div>
            <div class="text_card">
                <p class="card_text"><?= $post['post_description'] ?></p>
            </div>
            <img class="Image_add" src="../images/<?=$post['post_image']?>">
            <!-- <div class="like_comment_share">
                <div class="likes">
                    <div class="like"><a href=""><i id="thums" class="fas fas fa-thumbs-up fa-1x"></i></a> Like</div>
                    <div id="thum" class="like_number">12</div>
                </div>
                <div class="comments">
                    <div class="comment"> <a href=""><i class="fas fas fa-comment-alt fa-1x"></i></a> Comment</div>
                    <div class="comment_number">12</div>
                </div>
                <div class="shares">
                    <div class="share"><a href=""><i class="fas fas fa-share fa-1x"></i></a> Share</div>
                    <div class="share_number">12</div>
                </div>
            </div> -->
            </div>
            <!-- Display comment to post  -->
            <?php 
            foreach($getComment as $cmt):
            ?>
            <?php endforeach;?>
        </div>
    <?php endforeach;?>
    <!-- ????????????????? -->
</div>
<?php
require_once '../templates/footer.php';
?>