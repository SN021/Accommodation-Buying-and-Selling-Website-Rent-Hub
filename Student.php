<?php
// Check if form is submitted
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

    // Prepare data for insertion
    $nsbm_id = $_POST['nsbm_id'];
    $student_name = $_POST['student_name'];
    $contact_number = $_POST['contact_number'];
    $nsbm_email = $_POST['nsbm_email'];
    $address = $_POST['address'];

    // SQL query to insert data into table
    $sql = "INSERT INTO user_students (nsbm_id, student_name, contact_number, nsbm_email, address) VALUES ('$nsbm_id', '$student_name', '$contact_number', '$nsbm_email', '$address')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student details added successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }

    // Close database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In- Sign Up Student</title>
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
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Student</button></li>
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
                    <a href="studentdashboard.php" class="submit-btn">Sign In</a>

                </form>

                <form id='register' class='input-group-register' action="Student.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="nsbm_id" placeholder="Student NSBM ID" required>
                        <i class="fa-regular fa-id-card"></i>
                    </div>

                    <div class="input-box">
                        <input type="text" name="student_name" placeholder="Student Name" required>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="tel" name="contact_number" placeholder="Student Contact Number" required>
                        <i class='bx bxs-phone'></i>
                    </div>

                    <div class="input-box">
                        <input type="email" name="nsbm_email" placeholder="Student NSBM Email" required>
                        <i class='bx bx-envelope'></i>
                    </div>

                    <div class="input-box">
                        <input type="text" name="address" placeholder="Student Address" required>
                        <i class='bx bx-location-plus'></i>
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