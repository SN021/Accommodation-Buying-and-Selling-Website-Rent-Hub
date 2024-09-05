<?php
// Database connection code goes here

// Define your database connection parameters
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $landlord_id = $conn->real_escape_string($_POST['landlord_id']);
    $landlord_name = $conn->real_escape_string($_POST['landlord_name']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);


    // Insert data into landlords table
    $sql = "INSERT INTO user_landlords (landlord_id, landlord_name, contact_number, email, address) VALUES ('$landlord_id', '$landlord_name', '$contact_number', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        // Display success message using JavaScript alert box
        echo '<script>alert("Landlord details added successfully.");</script>';
    } else {
        // Display error message using JavaScript alert box
        echo '<script>alert("Error: ' . $sql . '<br>' . $conn->error . '");</script>';
    }
}

// Close database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In- Sign Up Landload</title>
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
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Landload</button></li>
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
                    <a href="landloarddashboard.php" class="submit-btn">Sign In</a>

                </form>

                <form id='register' class='input-group-register' action="landlord.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="landlord_id" placeholder="Landlord ID" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="landlord_name" placeholder="Landlord Name" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="contact_number" placeholder="Contact Number" required>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="address" placeholder="Address" required>
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