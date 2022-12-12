<?php
//require_once'../models/trainModel.php';
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>Train Information</title>
    <link rel="stylesheet" href="../assects/css/tableStyle.css">
</head>
<body>
<center>
 
        <table>
            <tr>
                <td>
                <input type="text" name="typedText" id="typedText" placeholder="select a train" onkeyup='liveSearchAJAX()'>
                <input type="submit" name="search" id="search" onclick='liveSearchAJAX()'>

                </td>
            </tr>
            <tr>
                <td>
                    <h3 id="info"></h3>
            
                
                <td>
            </tr>
            
        </table>
  
</center>

<script>
 

    function liveSearchAJAX()
    {  
    let typedText = document.getElementById("typedText").value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controllers/trainInfoVal.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('typedText='+typedText);

    xhttp.onreadystatechange = function()
    {
        
        if(this.readyState == 4 && this.status == 200)
        {    
                //alert(this.responseText);
            document.getElementsByTagName("h3")[0].innerHTML = this.responseText;
        }
        
    }
}
</script>

</body>
</html>