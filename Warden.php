<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sdtp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $warden_nsbm_id = $_POST['warden_nsbm_id'];
    $warden_name = $_POST['warden_name'];
    $warden_contact_number = $_POST['warden_contact_number'];
    $warden_nsbm_email = $_POST['warden_nsbm_email'];

    // SQL query to insert data into table
    $sql = "INSERT INTO user_wardens (warden_nsbm_id, warden_name, warden_contact_number, warden_nsbm_email) 
            VALUES ('$warden_nsbm_id', '$warden_name', '$warden_contact_number', '$warden_nsbm_email')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Warden details added successfully!");</script>';
    } else {
        echo '<script>alert("Error: ' . $sql . '\\n' . $conn->error . '");</script>';
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In- Sign Up Warden</title>
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
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Warden</button></li>
                </ul>
            </nav>
        </div>

        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'><b>Sign In</b></button>
                    <button type='button' onclick='register()' class='toggle-btn'><b>Sign Up</b></button>
                </div>

                <form id='login' class='input-group-login' action="Warden.php" method="POST">
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
                    <a href="wardandashboard.php" class="submit-btn">Sign In</a>
                </form>

                <form id='register' class='input-group-register' action="Warden.php" method="POST">
                    <div class="input-box">
                        <input type="text" placeholder="Warden NSBM Id" name="warden_nsbm_id" required>
                        <i class="fa-regular fa-id-card"></i>
                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="Warden Name" name="warden_name" required>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="tel" placeholder="Warden Contact Number" name="warden_contact_number" required>
                        <i class='bx bxs-phone'></i>
                    </div>

                    <div class="input-box">
                        <input type="email" placeholder="Warden NSBM Email" name="warden_nsbm_email" required>
                        <i class='bx bx-envelope'></i>
                    </div>

                    <button type="submit" class="btn">Submit</button>
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
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>