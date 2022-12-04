<?php
if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
     {
         echo "Must be filled all info...";
     }
     else if($_GET['err'] == 'exist')
     {
         echo "The email or username are already exist...";
     }

    else if($_GET['err'] == 'incorrect')
    {
        echo "Password and Confirm password must be same...";
    }

    else if($_GET['err'] == 'invalidpass')
    {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regestration</title>
    <link rel="stylesheet" href="../../assects/css/admin/signup.css">
</head>
<body>
<form action="../../controllers/admin/signupVal.php" method="post">
    <div class="login-div">
        <div class="logo"></div>
        <div class="title">Railway E-Ticket</div>
        <div class="sub-title">Create Account</div>
        <div class="fields">
            <div class="namee">
                <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                </svg>
                <input  type="text" name="name" class="user-input" placeholder="Full name">
            </div>

            <div class="emaill">
                <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                </svg>
                <input  type="email" name="email" class="user-input" placeholder="email">
            </div>
            <br>

            <div class="usernamee">
                <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                </svg>
                <input  type="username" name="username" class="user-input" placeholder="username">
            </div>
            
            <div class="password">
                <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                    <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                </svg>
                <input type="password" name="password" class="pass-input" placeholder="password">
            </div><br>
            <div class="confirmPassword">
                <svg fill='#999' class="svg-icon" viewBox="0 0 20 20">
                    <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                </svg>
                <input type="password" name="ConfirmPassword" class="pass-input" placeholder="re-type password">
            </div>

            <div class="dateOfBirth">
                <input type="date" name="dob">
            </div><br>

            <div class="gender">
                <input type="radio" name="gender" id="male" value="male"/>
                    <level for="male">Male</level>
                <input type="radio" name="gender" id="female" value="female"/>
                    <level for="female">Female</level>
                <input type="radio" name="gender" id="other" value="other"/>
                    <level for="other">Other</level>
            </div>
           
        </div>
        <button class="signin-button">Login</button>
        <div class="link">
            <a href="#">Forgot password?</a> or <a href="reg.php">Sign Up</a>
        </div>
    </div>

        <script>
            function passCheck()
            {
                let password = document.getElementById('password').value;
                
                if(password.length<8)
                {
                    document.getElementById('firstTr').innerHTML = "Password must be 8 charecter...";
                }
                else if(((password.split('0').length - 1)<1) && ((password.split('1').length - 1)<1) && ((password.split('2').length - 1)<1) && ((password.split('3').length - 1)<1) && ((password.split('4').length - 1)<1) && ((password.split('5').length - 1)<1) && ((password.split('6').length - 1)<1) && ((password.split('7').length - 1)<1) && ((password.split('8').length - 1)<1) && ((password.split('9').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one number...";
                }

                else if(((password.split('!').length - 1)<1) && ((password.split('@').length - 1)<1) && ((password.split('#').length - 1)<1) && ((password.split('$').length - 1)<1) && ((password.split('%').length - 1)<1) && ((password.split('&').length - 1)<1) && ((password.split('*').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one special charecter...";
                }
                
                else if(((password.split('A').length - 1)<1) && ((password.split('B').length - 1)<1) && ((password.split('C').length - 1)<1) && ((password.split('D').length - 1)<1) && ((password.split('E').length - 1)<1) && ((password.split('F').length - 1)<1) && ((password.split('G').length - 1)<1) && ((password.split('H').length - 1)<1) && ((password.split('I').length - 1)<1) && ((password.split('J').length - 1)<1) && ((password.split('K').length - 1)<1) && ((password.split('L').length - 1)<1) && ((password.split('M').length - 1)<1) && ((password.split('N').length - 1)<1) && ((password.split('O').length - 1)<1) && ((password.split('P').length - 1)<1) && ((password.split('Q').length - 1)<1) && ((password.split('R').length - 1)<1) && ((password.split('S').length - 1)<1) && ((password.split('T').length - 1)<1) && ((password.split('U').length - 1)<1) && ((password.split('V').length - 1)<1) && ((password.split('W').length - 1)<1) && ((password.split('X').length - 1)<1) && ((password.split('Y').length - 1)<1) && ((password.split('Z').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one upercase...";
                }
                else if(((password.split('a').length - 1)<1) && ((password.split('b').length - 1)<1) && ((password.split('c').length - 1)<1) && ((password.split('d').length - 1)<1) && ((password.split('e').length - 1)<1) && ((password.split('f').length - 1)<1) && ((password.split('g').length - 1)<1) && ((password.split('h').length - 1)<1) && ((password.split('i').length - 1)<1) && ((password.split('j').length - 1)<1) && ((password.split('k').length - 1)<1) && ((password.split('l').length - 1)<1) && ((password.split('m').length - 1)<1) && ((password.split('n').length - 1)<1) && ((password.split('o').length - 1)<1) && ((password.split('p').length - 1)<1) && ((password.split('q').length - 1)<1) && ((password.split('r').length - 1)<1) && ((password.split('s').length - 1)<1) && ((password.split('t').length - 1)<1) && ((password.split('u').length - 1)<1) && ((password.split('v').length - 1)<1) && ((password.split('w').length - 1)<1) && ((password.split('x').length - 1)<1) && ((password.split('y').length - 1)<1) && ((password.split('z').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one lowercase...";
                }
                
                else
                {
                    document.getElementById('firstTr').innerHTML = "";
                }
            }
        </script>
    </form>
</body>
</html>