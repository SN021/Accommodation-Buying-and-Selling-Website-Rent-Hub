<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In Admin</title>
    <link rel="stylesheet" href="signin-signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <img src="images/Rent_Hub.png">
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'"
                            style="width:auto;">Admin</button></li>
                </ul>
            </nav>
        </div>

        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'><b>Sign In</b></button>
                </div>

                <form id='login' class='input-group-login' action="your_login_endpoint" method="POST">
                    <div class="input-box">
                        <input type="text" placeholder="User Email" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot password</a>
                    </div>
                    <a href="admindashboard.php" class="submit-btn">Sign In</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a54aa66ec1.js" crossorigin="anonymous"></script>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>