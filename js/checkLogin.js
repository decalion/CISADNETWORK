/**
 * Check if the login form is correct
 */
$(document).ready(function () {
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
            $(this).css("background-color", "greenyellow");
        }
    });
});