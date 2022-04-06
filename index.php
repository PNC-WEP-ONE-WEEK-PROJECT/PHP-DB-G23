<?php
require_once 'templates/header.php';
require_once 'models/post.php';
?>
<div class="heads">
    <div class="facebooks_head">
        <h1>Welcome to my app</h1>
    </div>
</div>

<div class="containers mt">
    <div class="loggin">
        <form​​ action="" method="post">
            <div class="imgcontainer">
                <div class="fonst_account">
                    <img src="profile_image/fff.png" alt="Avatar" class="avatar">
                </div>
                <div class="name_access">
                    <span>You can access or pass your account</span>
                </div>
            </div>
            <div class="containers">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="first_name" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwords" required>
                <button type="submit"><a class="loog" href="logins/login.php">Login</a></button>
                <br>
            </div>
        </form>
        <button class="new_account" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">New account</button>
    </div>
</div>

<div id="id01" class="modal">
    <form class="modal-content animate" action="/action/create_acount.php" method="post">
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
                <label for="name"><b>First Name</b></label>
                <input type="text" placeholder="Enter First name" name="first_name" required>
            </div>
            <div class="lastname">
            <label for="name"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last name" name="last_name" required>
                
            </div>
            
            <div class="password">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwords" required>
            </div>
            
            <div class="password">
                <label for="uname"><b>Emial</b></label>
                <input type="text" placeholder="Enter Username" name="email" required>
            </div>
            <div class="form-group">
            <input type="radio" class="form-control-check" value="Male" name="gender" checked>Male
                <input type="radio" class="form-control-check" value="Female" name="gender">Female
            </div>
            <div class="date_of_birth">
                <label for="start">Start date:</label>
                <input type="date" id="start" name="trip-start"
                value="2018-07-22"
                min="2018-01-01" max="2018-12-31">
            </div>
            <button type="submit">Create</button>
        </div>
    </form>
</div>
<?php
require_once 'templates/footer.php';
?>




