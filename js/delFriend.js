/**
 * Script to delete a friend and makes a new AJAX query
 * 
 * @param {GET} Id of the user to be deleted
 */
$(document).ready(function () {
    $('.bFriend').click(function () {
        var xmlhttp = new XMLHttpRequest();
        var id = $(this).attr('id');
        xmlhttp.open("GET", "./models/delFriend.php?q=" + id, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText.length != 0) {
                    $('#li' + id).html(xmlhttp.responseText);
                }
            }
        }
    });
});