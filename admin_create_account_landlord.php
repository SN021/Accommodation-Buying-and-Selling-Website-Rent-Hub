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
    $landlord_name = $_POST['landlord_name'];
    $landlord_email = $_POST['landlord_email'];
    $landlord_address = $_POST['landlord_address'];
    $landlord_contact = $_POST['landlord_contact'];
    $password = $_POST['password'];

    // SQL query to insert data into the landlord table
    $sql = "INSERT INTO landlord (landlord_name, landlord_email, landlord_address, landlord_contact, password) 
            VALUES ('$landlord_name', '$landlord_email', '$landlord_address', '$landlord_contact', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Landlord Account</title>
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
        <h1>Create Landlord Account</h1>
        <form action="admin_create_account_landlord.php" method="post">
            <label for="landlord_name">Landlord Name:</label>
            <input type="text" name="landlord_name" id="landlord_name" required><br>

            <label for="landlord_email">Landlord Email:</label>
            <input type="email" name="landlord_email" id="landlord_email" required><br>

            <label for="landlord_address">Landlord Address:</label>
            <textarea name="landlord_address" id="landlord_address" required></textarea><br>

            <label for="landlord_contact">Landlord Contact Number:</label>
            <input type="tel" name="landlord_contact" id="landlord_contact" required><br>

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