<div class="container mt-5">
    <form action="controllers/create_post.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <textarea name="post_description" class="form-control" placeholder="Your description"></textarea>
            <input type="file" class="form-control-check" name="image" id="Image" value="Image"></input>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Post</button>
        </div>
    </form>
</div>
<div class="container" mt-3>
    <?php
    require_once 'models/post.php';
    $posts=getAllPost();
    //print_r($posts);
 foreach($posts as $post):
    ?>
    <div class="card mt-2">
        <div class="card-body">
            <p class="card-text"><?= $post['post_description'] ?></p>
            <image src="images/<?=$post['post_image']?>"
            <a href="action/edit.php?post_id=<?= $edit['post_edit'] ?>" class="card-link">edit</a>
            <a href="action/delete.php?post_id=<?= $post['post_id'] ?>" class="card-link">delete</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>