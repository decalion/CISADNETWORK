$(document).ready(function () {
    $('.bFriend').click(function () {
        var xmlhttp = new XMLHttpRequest();
        var id = $(this).attr('id');
        xmlhttp.open("GET", "./models/addFriend.php?q=" + id, true);
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
