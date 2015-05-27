function showHint(str) {
    if (str.length != 0) {
        if (str.value.length == 0){
            $('#objectList').empty();
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./models/select.php?q=" + str.value, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText.length != 0) {
                    document.getElementById("objectList").innerHTML = xmlhttp.responseText;
                }
            }
        }
    }
}