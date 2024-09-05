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
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $nsbm_id = mysqli_real_escape_string($conn, $_POST['nsbm_id']);
    $student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
    $student_address = mysqli_real_escape_string($conn, $_POST['student_address']);
    $student_phone = mysqli_real_escape_string($conn, $_POST['student_phone']);
    $student_email = mysqli_real_escape_string($conn, $_POST['student_email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Attempt insert query execution
    $sql = "INSERT INTO student (nsbm_id, student_name, student_address, student_phone, student_email, password) 
            VALUES ('$nsbm_id', '$student_name', '$student_address', '$student_phone', '$student_email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Records added successfully.');</script>";
    } else {
        echo "<script>alert('ERROR: Could not able to execute $sql.');</script>";
    }
}

// Close connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student Account</title>
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
        <h1>Create Student Account</h1>
        <form action="admin_create_account_student.php" method="post">
            <label for="nsbm_id">Student NSBM ID:</label>
            <input type="text" name="nsbm_id" id="nsbm_id" required><br>

            <label for="student_name">Student Name:</label>
            <input type="text" name="student_name" id="student_name" required><br>

            <label for="student_address">Student Address:</label>
            <textarea name="student_address" id="student_address" required></textarea><br>

            <label for="student_phone">Student Phone Number:</label>
            <input type="tel" name="student_phone" id="student_phone" required><br>

            <label for="student_email">Student NSBM Email:</label>
            <input type="email" name="student_email" id="student_email" required><br>

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