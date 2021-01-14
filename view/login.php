<?php
define("model", TRUE);
include "../common/header.php";
?>
<?php
if((isset($_SESSION['username']) )){
    header("Location: index.php");
}
?>

<div class="container text-center" style="margin-top: 100px">
    <div class="offset-md-3 col-lg-6">
        <h1>Login Form</h1>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="txt_username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="txt_password" placeholder="Enter password">
            </div>
            <div style="margin-top: 20px">
                <input type="button" class="btn btn-primary" value="Login" id="btn-login">
            </div>
        </form>
    </div>
</div>
<?php
include "../common/footer.php";
?>
<script src="js/login.js"></script>