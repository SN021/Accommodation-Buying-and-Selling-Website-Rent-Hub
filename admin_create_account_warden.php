<?php
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nsbm_id = mysqli_real_escape_string($conn, $_POST['nsbm_id']);
    $warden_name = mysqli_real_escape_string($conn, $_POST['warden_name']);
    $warden_email = mysqli_real_escape_string($conn, $_POST['warden_email']);
    $warden_phone = mysqli_real_escape_string($conn, $_POST['warden_phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO warden (nsbm_id, warden_name, warden_email, warden_phone, password) 
            VALUES ('$nsbm_id', '$warden_name', '$warden_email', '$warden_phone', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Record inserted successfully.");</script>';
    } else {
        echo '<script>alert("Error inserting record: ' . mysqli_error($conn) . '");</script>';
    }
}

mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Warden Account</title>
    <link rel="stylesheet" href="admin_create_account.css">
</head>

<body>

    <header>
        <img src="images/Rent_Hub.png" alt="Logo" class="logo">
        <span>Admin Dashboard - Create Account</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Create Account</a>
                    <div class="dropdown-content">
                        <a href="admin_create_account_student.php">Student</a>
                        <a href="admin_create_account_warden.php">Warden</a>
                        <a href="admin_create_account_landlord.php">Landlord</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Articles</a>
                    <div class="dropdown-content">
                        <a href="viewarticle.php">View Articles</a>
                        <a href="create article.php">Create Article</a>
                    </div>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Create Warden Account</h1>
        <form action="admin_create_account_warden.php" method="post">
            <form action="submit_warden_account.php" method="post">
                <label for="nsbm_id">Warden NSBM ID:</label>
                <input type="text" name="nsbm_id" id="nsbm_id" required><br>

                <label for="warden_name">Warden Name:</label>
                <input type="text" name="warden_name" id="warden_name" required><br>

                <label for="warden_email">Warden NSBM Email:</label>
                <input type="email" name="warden_email" id="warden_email" required><br>

                <label for="warden_phone">Warden Phone Number:</label>
                <input type="tel" name="warden_phone" id="warden_phone" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br>


                <button type="generate" onclick="createPassword()">Generate Password</button>
                <button type="submit">Register</button>
            </form>
    </div>

    <script>
        const passwordBox = document.getElementById("password");
        const lenght = 8;

        const upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        const lowerCase = "abcdefghijklmnopqrstuvwxyz";
        const number = "0123456789";
        const symbol = "@#&$*_+/-=";

        const allChars = upperCase + lowerCase + number + symbol;

        function createPassword() {
            let password = "";
            password += upperCase[Math.floor(Math.random() * upperCase.length)];
            password += lowerCase[Math.floor(Math.random() * lowerCase.length)];
            password += number[Math.floor(Math.random() * number.length)];
            password += symbol[Math.floor(Math.random() * symbol.length)];

            while (lenght > password.length) {
                password += allChars[Math.floor(Math.random() * allChars.length)];
            }
            passwordBox.value = password;
        }
    </script>
</body>

</html>