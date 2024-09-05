<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "sdtp";

// Create connection
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the Student table
$sql_student = "SELECT * FROM user_students";
$result_student = $conn->query($sql_student);

// Retrieve data from the Warden table
$sql_warden = "SELECT * FROM user_wardens";
$result_warden = $conn->query($sql_warden);

// Retrieve data from the Landlord table
$sql_landlord = "SELECT * FROM user_landlords";
$result_landlord = $conn->query($sql_landlord);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Requests</title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Logo" class="logo">
        <span>Admin Dashboard</span>
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
                <li class="dropdown">
                    <a href="userregisterdetails.php" class="dropbtn">User Details</a>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Student Registration</h1>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Contact Number</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
                <!-- Add more table headers as needed -->
            </tr>
            <?php
            // Display data from the Student table
            if ($result_student->num_rows > 0) {
                while ($row = $result_student->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nsbm_id"] . "</td>";
                    echo "<td>" . $row["student_name"] . "</td>";
                    echo "<td>" . $row["contact_number"] . "</td>";
                    echo "<td>" . $row["nsbm_email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>";
                    echo "<form action='userregistationdetails.php' method='POST'>";
                    // Change "student_id" to match the column name in your database
                    echo "<input type='hidden' name='reservation_id' value='" . $row["nsbm_id"] . "'>";
                    echo "<button type='submit' name='accept'>Accept</button>";
                    echo "<button type='submit' name='reject'>Decline</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No student registrations found</td></tr>";
            }

            ?>
        </table>
    </div>

    <div class="container">
        <h1>Warden Registration</h1>
        <table>
            <tr>
                <th>Warden ID</th>
                <th>Warden Name</th>
                <th>Warden Contact Number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <!-- Display data from the Warden table -->
            <?php
            if ($result_warden->num_rows > 0) {
                while ($row = $result_warden->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["warden_nsbm_id"] . "</td>";
                    echo "<td>" . $row["warden_name"] . "</td>";
                    echo "<td>" . $row["warden_contact_number"] . "</td>";
                    echo "<td>" . $row["warden_nsbm_email"] . "</td>";
                    echo "<td>";
                    echo "<form action='userregistationdetails.php' method='POST'>";
                    // Change "reservation_id" value to match the column name in your database
                    echo "<input type='hidden' name='reservation_id' value='" . $row["warden_nsbm_id"] . "'>";
                    echo "<button type='submit' name='accept'>Accept</button>";
                    echo "<button type='submit' name='reject'>Decline</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No warden registrations found</td></tr>";
            }

            ?>
        </table>
    </div>

    <div class="container">
        <h1>Landlord Registration</h1>
        <table>
            <tr>
                <th>Landlord ID</th>
                <th>Landlord Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <!-- Display data from the Landlord table -->
            <?php
            if ($result_landlord->num_rows > 0) {
                while ($row = $result_landlord->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["landlord_id"] . "</td>";
                    echo "<td>" . $row["landlord_name"] . "</td>";
                    echo "<td>" . $row["contact_number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>";
                    echo "<form action='userregistationdetails.php' method='POST'>";
                    // Change "name" value to match the column name in your database
                    echo "<input type='hidden' name='reservation_id' value='" . $row["landlord_id"] . "'>";
                    echo "<button type='submit' name='accept'>Accept</button>";
                    echo "<button type='submit' name='reject'>Decline</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No landlord registrations found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>