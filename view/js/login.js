$('body').off('click', '#btn-login');
$('body').on('click', '#btn-login', function (e) {
    e.preventDefault();

    if($('#txt_username').val() == ""){
        showEmptyFieldError("Username Error", "Username is not given", "error", "#txt_username");
        return;
    }
    if($('#txt_password').val() == ""){
        showEmptyFieldError("Password Error", "Password is not given", "error", "#txt_password");
        $('#txt_password').focus();
        return;
    }
    var formData = new FormData();
    formData.append('username', $('#txt_username').val());
    formData.append('password', $('#txt_password').val());
    $.ajax({
        url: "../model/ajax/process.php?act=login",
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
    }).done(function(data) {

        if (data == 'login success') {
            swal({
                title: "Success!",
                text: "Login Successfully",
                type: "success"
            }).then(function() {
                window.location = "index.php";
            });
        } else if (data == 'login failed') {
            swal({
                title: "Login Error!",
                text: "Login Failed! Invalid username/password",
                type: "error"
            });
        }
    });

});

function showEmptyFieldError(title, message, type, fieldId){
    swal({
        title: title,
        text: message,
        type: type
    }).then(function() {
        $(fieldId).focus();
    });
}