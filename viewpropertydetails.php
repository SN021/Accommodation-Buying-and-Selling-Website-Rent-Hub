<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wN8kK+Ajr0R9jOtLc4/kz3eXRvl92DnTcdKo3PXAp+8UB9u5fBcW/KBCbpAfFK6/bn42tnVfL2tDO6fOqzzftQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Inline CSS */

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f3f1;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .property {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            transition: box-shadow 0.3s ease;
            width: 700px;

        }

        .property:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .property h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .property p {
            color: #666;
            margin: 0;
            margin-bottom: 8px;
        }

        .property img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        .icon {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Logo" class="logo">
        <span>View Property Details</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="addproperty.php" class="dropbtn">Property Details</a>
                    <div class="dropdown-content">
                        <a href="viewpropertydetails.php">View Property</a>
                        <a href="addproperty.php">Add Property</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="reservation.php" class="dropbtnn">Reservation Requests </a>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1><i class="fas fa-home icon"></i> Property Details</h1>
        
        <?php
        // Database connection code goes here

        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sdtp";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from property_details table
        $sql = "SELECT * FROM property_details";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="property">';
                echo '<h2><i class="fas fa-building icon"></i>' . $row["title"] . '</h2>';
                echo '<p><strong><i class="fas fa-info-circle icon"></i>Description:</strong> ' . $row["description"] . '</p>';
                echo '<p><strong><i class="fas fa-home icon"></i>Type:</strong> ' . $row["type"] . '</p>';
                echo '<p><strong><i class="fas fa-user icon"></i>Landlord Name:</strong> ' . $row["landlord_name"] . '</p>';
                echo '<p><strong><i class="fas fa-dollar-sign icon"></i>Price:</strong> $' . $row["price"] . '</p>';
                echo '<p><strong><i class="fas fa-phone-alt icon"></i>Contact Number:</strong> ' . $row["contact_number"] . '</p>';
                echo "<img src='{$row['images']}' alt='Property Image' style='max-width: 100%;'>";
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
        ?>
    </div>


</body>

</html>