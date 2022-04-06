<?php
require_once '../templates/header.php';
require_once '../models/post.php';
?>

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

<!-- // Updata on user new create on facebook -->
<div class="new_acount_user">

</div>

<!-- ---------------------end---------------- -->

<div>
    <div class="card_body">
        <div class="card_text">
            <span>Your firstname: <?=$first_name?></span>
            <span>Your lastname: <?=$last_name?></span>
        </div>
    </div>
</div>
<?php
}
}
?>
