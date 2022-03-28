<?php
require_once '../templates/header.php';
require_once '../models/post.php';
$getComment=getComment();
?>
    <div class="bar">
        <div class="bar_fornt">
             <a href=""><i class="fas fa-home fa-2x"></i></a>
            <a href=""><i class="fas fas fa-users fa-2x"></i></a>
            <a href=""><i class="fas fas fa-video fa-2x"></i></a>
            <a href=""><i class="fas fas fa-shopping-cart fa-2x"></i></a>
            <a href=""><i class="fas fas fa-bell fa-2x"></i></a>
            <a href=""><i class="fas fas fa-bars fa-2x"></i></a>
        </div>
    </div>
    <hr>
<a href="../index.php"><i class="fas fa-sign-out-alt fa-2x icon_stylser"></i></a>
<div class="cirle">
    <div class="filer">
        <img class="profiler" src="../profile_image//dog-g74222f906_1920.jpg" alt="">
        <span class="myname">Heng-Narong</span>
        <div class="body_text">
            <h5>Your old friend search</h5>
            <input class="text_search" type="text" placeholder="Search friends here">
            
        </div>
    </div>
    <div class="detail">
        <input class="mind_text" type="text" placeholder="What is your mind? / Post" >
        <a href="../views/post_form.php"><i class="fas far fa-share-square fa-2x"></i></a>
    </div>
    <table>
        <tr>
            <th>Video/Post</th>
        </tr>
    </table>
</div>
​​<div class="table_mind">Here is the result that you have post</div>


<div class="containerS" mt-3>
    <?php
    $posts=getAllPost();
    foreach($posts as $post):
    ?>
    <div class="card">
        <div class="card-body">
            <div class="both_account">
                <div class="pict_profile">
                    <img class="imagess" src="../profile_image/dog-g74222f906_1920.jpg" alt="">
                </div>
                <div class="acount">
                    <span class="name_accoount">Heng-Naong</span>
                    <a class="fonts_more" href=""><i class="fas fas fa-ellipsis-h fa-2x"></i></a>
                    <?php
                        $date = date_create($post['post_date']);
                        ?>
                        <p class="datetime"><?= date_format($date, '\ D,j,M,Y'); ?></p>
                </div>
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

                <!-- //====add comment to user poat =========== -->
            </div>

            <div class="commentners">
                <form action="../views/comment.php" method="post" class="write_comment">
                    <textarea class="text_comment" type="text"  placeholder="Add comment" name="comment_body"></textarea>
                    <button class="buttonss"><i class="fas fa-paper-plane commentese"></i></button>
                </form>
            </div>
            </div>
            <!-- Display comment to post  -->
            <?php
            foreach($getComment as $cmt):
            ?>
            <div class="commenterrs">
                <span><?=$cmt['comment_body']?></span>
            </div>
            <?php endforeach?>
        </div>
    <?php endforeach;?>
    <!-- ????????????????? -->
</div>
<?php
require_once '../templates/footer.php';
?>

