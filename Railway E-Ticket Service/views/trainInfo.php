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
</head>
<body>
<center>
 
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="../controllers/logout.php">logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" name="typedText" id="typedText" onkeyup='liveSearchAJAX()'>
                <input type="submit" name="search" id="search" onclick='liveSearchAJAX()'>

                </td>
                <td>
                    <h3 id="info"></h3>
            
                
                <td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
  
</center>

<script>
 

    function liveSearchAJAX()
    {  
    let typedText = document.getElementById("typedText").value;
   // let search = document.getElementById("search").value;
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