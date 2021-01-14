<?php
include "../common/header.php";
?>

<?php
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-4">Welcome To Mian Quiz APP</h1>
            <hr class="my-4">

        </div>
    </div>
</div>

<?php
include "../common/footer.php";
?>
