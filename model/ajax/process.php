<?php
//if(!(defined("model"))){
//    echo "<script>
//alert('Unauthorized Access');
//window.location.href = '../../view'
//</script>";
//}
session_start();
include "../db.php";
if(isset($_GET['act'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqlLogin = "Select * from `admin` 
    WHERE `username` = '$username' AND `password` = '$password'";
    $checkLoginResult = mysqli_query($conn, $sqlLogin);
    if (mysqli_num_rows($checkLoginResult) > 0) {
        $row = mysqli_fetch_array($checkLoginResult, MYSQLI_ASSOC);
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        echo "login success";
    } else {
        echo "login failed";
    }
}else{
    echo "<script>
alert('Unauthorized Access');
window.location.href = '../../view'
</script>";

}

