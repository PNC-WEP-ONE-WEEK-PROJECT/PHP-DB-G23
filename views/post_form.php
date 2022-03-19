
<div class="container mt-3">
    <form action="../action/create_post.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <textarea class="title_post" name="post_description" class="form-control" placeholder="You description"></textarea>
        </div>
        <div class="images">
            <div class="choose_profile">
                <input type="file" class="choose" name="image" id="Image" value="Image">  </input>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="click_post">Post</button>
        </div>
    </form>
</div>


<?php



require_once '../models/post.php';
?>

<div class="container" mt-3>
    <?php
    $posts=getAllPost();
    // print_r($posts);
    foreach($posts as $post):
        // echo $post['post_id'];
    ?>
    <div class="card">
        <div class="card-body">

            <div class="both_account">
                <div class="pict_profile">
                    <img class="imagess" src="../profile_image/dog-g74222f906_1920.jpg" alt="">
                </div>
                <div class="acount">
                    <span class="name_accoount">Heng-Naong</span>
                    <h6 class="datetime"><?=$post['post_date']?></h6>
                </div>
            </div>
            <div class="add_font">
                <a class="adding" href="../views/edit_view.php?edit= <?=$post['post_id'] ?>" class="card-link"><i class="fas fas far fa-edit fa-1x"></i></a>
                <a class="adding" href="../action/delete.php?post_id=<?= $post['post_id'] ?>" class="card-link"><i class="fa fas fa-trash fa-1x"></i></a>
                <a class="adding" href="../action//done.php" class="card_link"><i class=""></i>Done</a>
                
            </div>
            <div class="text_card">
                <p class="card_text"><?= $post['post_description'] ?></p>
            </div>

            <img class="Image_add" src="../images/<?=$post['post_image']?>">
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

                <!-- //====add comment to user=========== -->
                
            </div>
            <div class="commentners">
                <input class="text_comment" type="text"  placeholder="Add comment">
                <button class="button_comment" >Comment</button>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- ????????????????? -->
</div>