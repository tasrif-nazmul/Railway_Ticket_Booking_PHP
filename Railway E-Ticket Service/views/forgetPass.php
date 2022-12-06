<html>

<head>
    <title>Forgotten Password</title>
</head>

<body>
    <center>
        <form action="../controllers/forgetPassVal.php" method="post">
            <table border="2px">
                <tr>
                    <td width="300px">
                        <a href="home.php"> <img src="photo/train.jpg" width="30px">Railway E-ticket Service</a>
                    </td>
                    <td align="left">
                        <a href="home.php">Home</a> |
                        <a href="signin.php">Login</a> |
                        <a href="reg.php">Regestration</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <h3>Forgotten Password</h3><br>

                        <h4 style="color: red;">
                            <?php

                            if (isset($_GET['err'])) {
                                if ($_GET['err'] == 'invalid') {
                                    echo "Invalid Username or Password...";
                                }
                                if ($_GET['err'] == 'null') {
                                    echo "Please enter email or username...";
                                }
                            }

                            ?>
                        </h4><br>

                        <input type="text" name="forgot" value="" placeholder="enter email or username">
                        <input type="submit" name="search" value="Submit" />

                    </td>
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