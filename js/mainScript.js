$(document).ready(function () {
    $('#userInputSearch').focus(function() {
        $(this).val('');
    });
    $('#userInputSearch').blur(function() {
        if ($('#userInputSearch').val() == '') {
            $(this).val('search...');
        }
        
    });
});