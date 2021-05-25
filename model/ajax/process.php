<?php
//if(!(defined("model"))){
//    echo "<script>
//alert('Unauthorized Access');
//window.location.href = '../../view'
//</script>";
//}
session_start();
include_once "../db.php";
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

    $hobby = "";
    foreach ($hobbyArray as $item){
        $hobby .= $item . " ½ ";
    }
    $sql = "INSERT INTO `simple_form_data`(`email`, `password`, `age`, `hobby`, `about`, `gender`,
                               `image`)
    VALUES 
    ('$email', '$password', '$age', '$hobby', '$about', '$gender', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "failed";
    }

}

else if(isset($_GET['act']) && $_GET['act'] == 'dynamicFormData'){
    $nameArray = $_POST['name'];
    $name = "";
    foreach ($nameArray as $item){
        $name .= $item . " ½ ";
    }
    echo $name;
    /*
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
    $sql = "INSERT INTO `simple_form_data`(`email`, `password`, `age`, `hobby`, `about`, `gender`,
                               `image`)
    VALUES
    ('$email', '$password', '$age', '$hobby', '$about', '$gender', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "failed";
    }*/
}

else{
    echo "<script>
alert('Unauthorized Access');
window.location.href = '../../view'
</script>";

}

