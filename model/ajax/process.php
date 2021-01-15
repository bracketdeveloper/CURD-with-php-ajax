<?php
//if(!(defined("model"))){
//    echo "<script>
//alert('Unauthorized Access');
//window.location.href = '../../view'
//</script>";
//}
session_start();
include "../db.php";
if(isset($_GET['act']) && $_GET['act']== 'login'){
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
}

else if(isset($_GET['act']) && $_GET['act'] == 'formData'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $hobbyArray = $_POST['hobby'];
    $about = $_POST['about'];
    $gender = $_POST['gender'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $hobby = "";
    foreach ($hobbyArray as $item){
        $hobby .= $item . " ½ ";
    }


    echo "$email \n $password \n $age \n $hobby \n $about \n $gender ";
}
else{
    echo "<script>
alert('Unauthorized Access');
window.location.href = '../../view'
</script>";

}

