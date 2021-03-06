/**
 * Makes a new query when you do click on an answer of a poll and sends it to the server
 */
$(document).ready(function () {
    $('.buttonPoll').click(function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./models/poll.php?q=" + $(this).attr('value'), true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText.length != 0) {
                    $('#navListFooterPoll').html(xmlhttp.responseText);
                }
            }
        }
    });
});