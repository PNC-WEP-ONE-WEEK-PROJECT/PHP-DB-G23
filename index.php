<?php
require_once 'templates/header.php';
?>
    <div class="loggin">
        <form​​ action="/action_page.php" method="post">
            <div class="imgcontainer">
                <div class="fonst_account">
                    <img src="profile_image/fff.png" alt="Avatar" class="avatar">
                </div>
                <div class="name_access">
                    <span>You can access or pass your account</span>
                </div>
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit"><a href="">Login</a></button>
                <br>
                <button class="new_account" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">New account</button>
            </div>
        </form>
    </div>
    <?php
    ?>

<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <div class="imgcontainer">
                <div class="fonst_account">
                    <img src="profile_image/fff.png" alt="Avatar" class="avatar">
                </div>
                <div class="names_access">
                    <span>You can create your account here</span>
                </div>
            </div>
      
    </div>

    <div class="container">
        <div class="firtname">
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="firstname" required>
        </div>

        <div class="lastname">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        </div>

        <div class="password">
        <label for="uname"><b>Emial</b></label>
            <input type="text" placeholder="Enter Username" name="emial" required>
        </div>
        <div class="date_of_birth">
        <label for="start">Start date:</label>
        <input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
        </div>
        
      <button type="submit">Create</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<?php
// require_once 'templates/header.php';
// require_once 'views/post_form.php';
// require_once 'templates/footer.php';
?>



