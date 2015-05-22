/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showHint(str)
{
    
    if (str.length != 0) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./models/select.php?q=" + str.value, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText.length != 0) {
                document.getElementById("lista").innerHTML=xmlhttp.responseText;
                    
                }
                /*
                document.getElementById("userInputSearch").innerHTML = xmlhttp.responseText;*/
            }
        }
        
    }
}

    
    $(document).ready(function()
    {
        $("#lista").click(function()
        {
         alert($(this).text());
         $("#lista").each(function(indice, elemento)
         {
            alert(indice, $(elemento).text()); 
         });
      
         
         
         
        });
    });
    

