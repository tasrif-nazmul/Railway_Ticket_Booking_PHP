<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="../../assects/css/user/forgottenPass.css">
</head>

<body>
    <form action="../../controllers/admin/changePassVal.php" method="post" onsubmit="return checkAll()">
        <div class="login-div">
            <div class="goToHome">
                <a href="dashboard.php">Go to Dashboard</a>
            </div>
            <div class="logo"></div>
            <div class="title">Railway E-Ticket</div>
            <div class="sub-title">Change your password</div>
            <div class="error">
                <span id="error">
                    <?php

                    if (isset($_GET['err'])) 
                    {
                        if ($_GET['err'] == 'null') 
                        {
                            echo "Must be filled all info..";
                        } 
                        else if ($_GET['err'] == 'exist')
                        {
                            echo "This email doesn't exist";
                            
                        } 
                        else if ($_GET['err'] == 'different')
                        {
                            echo "Password and re-type password must be same";
                            
                        } 
                        else if ($_GET['err'] == 'notMatch')
                        {
                            echo "Password isn't correct";
                            
                        } 
                        else if ($_GET['err'] == 'resetSuccess')
                        {
                            echo '<script>alert("Password reset successfully");</script>';
                        } 
                        else if ($_GET['err'] == 'invalid')
                        {
                            echo "Invalid Username or Password...";
                        } 
                        else if ($_GET['err'] == 'bad_request') 
                        {
                            echo "Please login first...";
                        }
                    }

                    ?>
                </span>
            </div>
            <div class="fields">
                <div class="usernamee">
                    <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <input type="password" name="password" class="user-input" id="email" placeholder="old password">
                </div>
                <div class="password">
                    <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <input type="password" name="newPassword" class="pass-input" id="password" placeholder="new password" onkeyup="passCheck()">
                </div>
                <div class="Cpassword">
                    <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <input type="password" name="Cpassword" class="pass-input" id="ConfirmPassword" placeholder="re-type password" onkeyup="cpassCheck()">
                </div>
            </div>
            <button class="signin-button">Save</button>
        </div>

        <script>
            var passError=true;
            var cPassError=true;
            function passCheck()
            {
                let password = document.getElementById('password').value;
                
                if(password.length<8)
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Password must be 8 charecter...";
                }
                else if(((password.split('0').length - 1)<1) && ((password.split('1').length - 1)<1) && ((password.split('2').length - 1)<1) && ((password.split('3').length - 1)<1) && ((password.split('4').length - 1)<1) && ((password.split('5').length - 1)<1) && ((password.split('6').length - 1)<1) && ((password.split('7').length - 1)<1) && ((password.split('8').length - 1)<1) && ((password.split('9').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one number...";
                }

                else if(((password.split('!').length - 1)<1) && ((password.split('@').length - 1)<1) && ((password.split('#').length - 1)<1) && ((password.split('$').length - 1)<1) && ((password.split('%').length - 1)<1) && ((password.split('&').length - 1)<1) && ((password.split('*').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one special charecter...";
                }
                
                else if(((password.split('A').length - 1)<1) && ((password.split('B').length - 1)<1) && ((password.split('C').length - 1)<1) && ((password.split('D').length - 1)<1) && ((password.split('E').length - 1)<1) && ((password.split('F').length - 1)<1) && ((password.split('G').length - 1)<1) && ((password.split('H').length - 1)<1) && ((password.split('I').length - 1)<1) && ((password.split('J').length - 1)<1) && ((password.split('K').length - 1)<1) && ((password.split('L').length - 1)<1) && ((password.split('M').length - 1)<1) && ((password.split('N').length - 1)<1) && ((password.split('O').length - 1)<1) && ((password.split('P').length - 1)<1) && ((password.split('Q').length - 1)<1) && ((password.split('R').length - 1)<1) && ((password.split('S').length - 1)<1) && ((password.split('T').length - 1)<1) && ((password.split('U').length - 1)<1) && ((password.split('V').length - 1)<1) && ((password.split('W').length - 1)<1) && ((password.split('X').length - 1)<1) && ((password.split('Y').length - 1)<1) && ((password.split('Z').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one upercase...";
                }
                else if(((password.split('a').length - 1)<1) && ((password.split('b').length - 1)<1) && ((password.split('c').length - 1)<1) && ((password.split('d').length - 1)<1) && ((password.split('e').length - 1)<1) && ((password.split('f').length - 1)<1) && ((password.split('g').length - 1)<1) && ((password.split('h').length - 1)<1) && ((password.split('i').length - 1)<1) && ((password.split('j').length - 1)<1) && ((password.split('k').length - 1)<1) && ((password.split('l').length - 1)<1) && ((password.split('m').length - 1)<1) && ((password.split('n').length - 1)<1) && ((password.split('o').length - 1)<1) && ((password.split('p').length - 1)<1) && ((password.split('q').length - 1)<1) && ((password.split('r').length - 1)<1) && ((password.split('s').length - 1)<1) && ((password.split('t').length - 1)<1) && ((password.split('u').length - 1)<1) && ((password.split('v').length - 1)<1) && ((password.split('w').length - 1)<1) && ((password.split('x').length - 1)<1) && ((password.split('y').length - 1)<1) && ((password.split('z').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one lowercase...";
                }
                
                else
                {
                    passError=false;
                    document.getElementById('error').innerHTML = "";
                }
            }
            function cpassCheck()
            {
                let ConfirmPassword = document.getElementById('ConfirmPassword').value;
                let password = document.getElementById('password').value;
                if(password != ConfirmPassword)
                {
                    cPassError=true;
                    document.getElementById('error').innerHTML="Same as Password";
                }
                else
                {
                    cPassError=false;
                    document.getElementById('error').innerHTML="";
                }
            }

            function checkAll()
            {  

                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;
                let ConfirmPassword = document.getElementById('ConfirmPassword').value;

                if(email=="" || password=="" || ConfirmPassword=="")
                { 
                    alert("Must be fillup all information"); event.preventDefault(); 
                }
                else if(!passError==false)
                {
                    alert("Password error! Password should be atleast 8 charecter, 1 upercase 1 lowercase, 1 number and 1 special charecter "); event.preventDefault();
                }
                else if(cPassError==true)
                {
                    alert("Password and confirm password must be same"); event.preventDefault();
                }
            }

        </script>

    </form>
</body>

</html>