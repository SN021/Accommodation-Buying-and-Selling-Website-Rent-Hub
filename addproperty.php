<?php
// Connect to your database (replace with your actual database credentials)
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
$title = isset($_POST['title']) ? $_POST['title'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;
$type = isset($_POST['type']) ? $_POST['type'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$price = isset($_POST['price']) ? $_POST['price'] : null;
$contact = isset($_POST['contact']) ? $_POST['contact'] : null;

// Handle image upload
// Your image handling code here

// Check if latitude and longitude keys exist in $_POST array
$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : null;
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : null;

// Insert data into the database
$sql = "INSERT INTO property_details (title, description, type, landlord_name, price, contact_number, images, latitude, longitude) VALUES ('$title', '$description', '$type', '$name', '$price', '$contact', 'image_path', '$latitude', '$longitude')";

if ($conn->query($sql) === TRUE) {
    // Display success message
    echo '<script>alert("Property details added successfully!");</script>';
} else {
    // Display error message
    echo '<script>alert("Error: ' . $sql . '\\n' . $conn->error . '");</script>';
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>
        /* Inline CSS */
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f5f3f1;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input[type="file"] {
            margin-top: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        h2 {
            text-align: center;
        }

        #map {
            width: 100%;
            height: 300px;
            margin-top: 20px;
        }

        span {
            margin-left: -700px;
        }
    </style>
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Admin Logo" class="logo">
        <span>Landlord Dashboard - Add Property</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="addproperty.php" class="dropbtnn">Property Details</a>
                </li>
                <li class="dropdown">
                    <a href="reservation.php" class="dropbtnn">Reservation Requests </a>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="form-container">
        <h2>Add Property</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Property Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="type">Type of Property:</label>
                <select id="type" name="type" required>
                    <option value="">Select Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="House">House</option>
                    <option value="Villa">Villa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Landlord Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="images">Images:</label>
                <input type="file" id="images" name="images[]" multiple accept="image/*" required>
            </div>
            <!-- Google Map -->
            <div id="map"></div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <!-- JavaScript for Google Maps -->
    <script>
        // Initialize and add the map
        function initMap() {
            // Default location (Example: New York City)
            var defaultLocation = {
                lat: 40.7128,
                lng: -74.0060
            };

            // The map, centered at the default location
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 15,
                    center: defaultLocation
                });

            // Listen for click event on the map to get location
            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });

            // Place marker on the clicked location
            function placeMarker(location) {
                if (marker && marker.setMap) {
                    marker.setMap(null);
                }
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        }
    </script>
    <!-- Load the Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>