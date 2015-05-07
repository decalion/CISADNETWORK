$(document).ready(function () {
    $('#userInputSearch').focus(function () {
        $(this).val('');
    });
    $('#userInputSearch').blur(function () {
        $(this).val('search...');
    });
});