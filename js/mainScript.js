/**
 * Check if the search input is empty and if is empty it fills with a new string
 */
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