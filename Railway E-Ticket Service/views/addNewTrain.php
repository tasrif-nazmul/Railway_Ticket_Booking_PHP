<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
else if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
    {
        echo "Must be filled all info...";
    }
}


if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add new train</title>
</head>
<body>
    <center>
        <form action="../controllers/addNewTrainVal.php" method="post">
            <table>
                <tr>
                    <td>
                        Train name: <input type="text" name = "trname"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        From Station: <input type="text" name = "Fstation"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Arrival From: <input type="text" name = "arrivalF"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        To Station: <input type="text" name = "Tstation"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Arrival To: <input type="text" name = "arrivalT"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "submit"><br>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>