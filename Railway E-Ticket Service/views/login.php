<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Portal</title>
    <link rel="stylesheet" href="../assects/css/user/login.css">
</head>

<body>
    <form action="../controllers/loginC.php" method="post">
        <div class="login-div">
            <div class="logo"></div>
            <div class="title">Railway E-Ticket</div>
            <div class="sub-title">User Portal</div>
            <div class="error">
                    <?php

                    if (isset($_GET['err'])) 
                    {
                        if ($_GET['err'] == 'null') 
                        {
                            echo "Must be filled all info..";
                        } 
                        else if ($_GET['err'] == 'invalid') 
                        {
                            echo "Invalid Username or Password...";
                        } 
                        else if ($_GET['err'] == 'success') 
                        {
                            echo "Password reset successfully";
                        } 
                        else if ($_GET['err'] == 'bad_request') 
                        {
                            echo "Please login first...";
                        }
                    }

                    ?>
            </div>
            <div class="fields">
                <div class="usernamee">
                    <input type="username" name="username" class="user-input" placeholder="username">
                </div>
                <div class="password">
                    <input type="password" name="password" class="pass-input" placeholder="password">
                </div>
            </div>
            <button class="signin-button">Login</button>
            <div class="link">
                <a href="forgottenPass.php">Forgot password?</a> or <a href="reg.php">Sign Up</a>
            </div>
        </div>
    </form>
</body>

</html>