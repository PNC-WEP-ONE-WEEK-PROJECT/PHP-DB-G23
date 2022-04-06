<?php
require_once '../templates/header.php';
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
    
<!-- new add today 3,4,2022 -->
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['passwords']) && !empty(['gender'])){

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $passwords=$_POST['passwords'];
    $gender=$_POST['gender'];
    // echo $first_name,$last_name, $email,$passwords,$gender;
    adduser($first_name,$last_name,$email,$passwords,$gender);
   

// header('location:../action/create_acount.php')
?>
<div>
    <div class="card_body">
        <div class="card_text">
            <span>Your firstname: <?=$first_name?></span>
            <span>Your lastname: <?=$last_name?></span>
            <span>Your email: <?=$email?></span>
            <span>Your password: <?= $passwords?></span>
            <span>Your gender: <?=$gender?></span>
        </div>
    </div>
</div>
<?php
}
}
?>
<!-- ================================== -->

<div class="painer_profile">
    <div class="big_cover">
        <img class="pics" src="../profile_image/caple.jpg" alt="">
        <img class="small_im" src="../profile_image/dog-g74222f906_1920.jpg" alt="">
    </div>
    <span class="name_files">Heng-Narong</span>
    <span class="names">4.5k  Friends</span>
    <div class="create_post">
        <div class="log_post"><a class="logg" href="../views/post_form.php">Post</a></div>
        <div class="loggs"><a class="colors" href="">Add Sotry</a></div>
    </div>
    <?php
    require_once '../templates/footer.php'; ?>
</div>


