<?php
if(!isset($_COOKIE['status']))
{
    header('location: signin.php?err=bad_request');
}

else if(isset($_GET['err']))
{
    
    if($_GET['err'] == 'null')
    {
        echo "Must be filled all info..";
    }
    else if($_GET['err'] == 'wrong')
    {
        echo "Sit number should be equal to Ticket number..";
    }
    
   
}

?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="../controller/dhakaToKhulnaVal.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="photo/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="logout.php">Logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <h1 align="center">Sundarban Express</h1>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">

                <select name="class">
                    <option value>Select a class</option>
                    <option value="ac">AC</option>
                    <option value="nonAc">Non-AC</option>
                </select>
                <select name="number">
                    <option value>Select Ticket number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option></br>
                    
                </select></br>
                <h3>Select Sit Number</h3>
                <?php
                for($i=1; $i<=50; $i++)
                {
                    ?>
                    <input type="checkbox" name="<?php echo $i;?>" value="true" />
                    <?php 
                    if($i<10)
                    {
                        echo "0";
                    }
                    echo $i;
                    if($i%5==0)
                    {
                        echo "<br>";
                    }
                    else if(($i+3)%5==0)
                    {
                        echo "-------";
                    }
                }
                ?>
                    
                </br><input type="submit" name="btn" value="Book Ticket"/>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>