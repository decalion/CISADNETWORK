$(document).ready(function () {
    $('#name').blur(function() {
        if ($(this).val() == '' || $(this).val().length < 4) {
            $(this).css("background-color", "red");
        } else {
            $(this).css("background-color", "greenyellow");
        }
    });
    $('#lastname').blur(function() {
        if ($(this).val() == '' || $(this).val().length < 2) {
            $(this).css("background-color", "red");
        } else {
            $(this).css("background-color", "greenyellow");
        }
    });
    $('#username').blur(function() {
        if ($(this).val() == '' || $(this).val().length < 4) {
            $(this).css("background-color", "red");
        } else {
            $(this).css("background-color", "greenyellow");
        }
    });
    $('#password').blur(function() {
        if ($(this).val() == '' || $(this).val().length < 4) {
            $(this).css("background-color", "red");
        } else {
            if ($(this).val() !== $('#confirmPassword').val()) {
                $('#confirmPassword').css("background-color", "red");
            } else {
                $('#confirmPassword').css("background-color", "greenyellow");
            }
            $(this).css("background-color", "greenyellow");
        }
    });
    $('#confirmPassword').blur(function() {
        if ($(this).val() !== $('#password').val() || $(this).val().length < 4) {
            $(this).css("background-color", "red");
        } else {
            $(this).css("background-color", "greenyellow");
        }
    });
    $('#email').blur(function() {
        if ($(this).val() == '' || $(this).val().length < 4) {
            $(this).css("background-color", "red");
        } else {
            if (isEmail($(this).val())) {
                $(this).css("background-color", "greenyellow");
            } else {
                $(this).css("background-color", "red");
            }
        }
    });
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}