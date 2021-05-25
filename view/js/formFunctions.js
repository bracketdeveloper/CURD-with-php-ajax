function loginForm() {
    $('body').off('click', '#btn-login');
    $('body').on('click', '#btn-login', function (e) {
        e.preventDefault();

        if ($('#txt-username').val() == "") {
            showEmptyFieldError("Username Error", "Username is not given", "error", "#txt-username");
            return;
        }
        if ($('#txt-password').val() == "") {
            showEmptyFieldError("Password Error", "Password is not given", "error", "#txt-password");
            $('#txt-password').focus();
            return;
        }
        var formData = new FormData();
        formData.append('username', $('#txt-username').val());
        formData.append('password', $('#txt-password').val());
        $.ajax({
            url: "../model/ajax/process.php?act=login",
            type: 'POST',
            contentType: false,
            processData: false,
            data: formData,
        }).done(function (data) {
            if (data == 'login success') {
                swal({
                    title: "Success!",
                    text: "Login Successfully",
                    type: "success"
                }).then(function () {
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
}

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$('#data-form').submit(function(event) {
    event.preventDefault();
    if ($('#txt-email').val() == "") {
        showEmptyFieldError("Email Error", "Email is not given", "error", "#txt-email");
        return;
    }
    if (!validateEmail($('#txt-email').val())) {
        showEmptyFieldError("Email Error", "Invalid format", "error", "#txt-email");
        return;
    }
    if ($('#txt-password').val() == "") {
        showEmptyFieldError("Password Error", "Password is not given", "error", "#txt-password");
        $('#txt-password').focus();
        return;
    }
    if ($('#select-hobby').val() == "") {
        showEmptyFieldError("Hobby Error", "Hobby is not selected", "error", "#select-hobby");
        return;
    }
    if ($('#txt-about').val() == "") {
        showEmptyFieldError("About Yourself Error", "About detail is not given", "error", "#txt-about");
        return;
    }
    if ($('#image-id').val() == "") {
        showEmptyFieldError("Image Error", "Image is not selected", "error", "#image-id");
        return;
    }
    var selectedRadio = $("input[type='radio'][name='gender']:checked");
    if (selectedRadio.length <= 0) {
        showEmptyFieldError("Gender Error", "Gender is not selected", "error", "#radio-gender");
        return;
    }

    var selectedcheck = $("input[type='checkbox'][id='chk-must']:checked");
    if (selectedcheck.length <= 0) {
        showEmptyFieldError("Agreement Error", "Must be agree with Terms and Conditions", "error", "#chk-must");
        return;
    }

    $.ajax({
        url: "../model/ajax/process.php?act=formData",
        type: 'POST',
        contentType: false,
        processData: false,
        data: new FormData(this),
    }).done(function (data) {
        if (data == "success") {
            swal({
                title: "Success!",
                text: "Data inserted successfully",
                type: "success",
                icon: 'success'
            }).then(function () {
                $('#data-form')[0].reset();
            });
        } else if (data == "failed") {
            swal({
                title: "Error!",
                text: "Some Error occur",
                type: "error",
                icon: 'error'
            });
        }
    });
});

$('#dynamic-data-form').submit(function(event) {
    event.preventDefault();

    /*
    checkEmptyField('image[]', "Image Error", "Image is not selected");

    checkEmptyField('about[]', "About Error", "About is not given");

    checkEmptyField('teacher[]', "Teacher Error", "Teacher is not selected");

    checkEmptyField('name[]', "Name Error", "Name is not given");
    */



        $.ajax({
            url: "../model/ajax/process.php?act=dynamicFormData",
            type: 'POST',
            contentType: false,
            processData: false,
            data: new FormData(this),
        }).done(function (data) {
            alert(data);
            if (data == "success") {
                swal({
                    title: "Success!",
                    text: "Data inserted successfully",
                    type: "success",
                    icon: 'success'
                }).then(function () {
                    $('#dynamic-data-form')[0].reset();
                });
            } else if (data == "failed") {
                swal({
                    title: "Error!",
                    text: "Some Error occur",
                    type: "error",
                    icon: 'error'
                });
            }
        });
});


function showEmptyFieldError(title, message, type, fieldId) {
    swal({
        title: title,
        text: message,
        type: type,
        icon: 'warning'
    }).then(function () {
        $(fieldId).focus();
        fieldId.focus();
    });
}

function checkEmptyField(fieldName, errorTitle, errorMessage){
    var nameArray = document.getElementsByName(fieldName);
    for(var i= 0 ; i<nameArray.length; i++){
        if ($.trim(nameArray[i].value) == "") {
            showEmptyFieldError(errorTitle, errorMessage, "error", nameArray[i]);
            return;
        }
    }
}
