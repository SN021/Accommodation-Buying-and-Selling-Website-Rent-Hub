<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">

    <style>
        .form-container {
            background-color: #fff;
            padding: 70px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80px;
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        button[type="submit"] {
            background-color: green;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: green;
        }
    </style>
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Admin Logo" class="logo">
        <span>Landlord Dashboard</span>
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

    <br><br>
    <div class="form-container">
        <h1>New Reservations</h1>
        <form action="delete_property.php" method="POST">
            <label for="property_id">New Alert</label>
            <button type="submit" onclick="return confirm('Student ID: 25227 / Contact: 076 234 5678')">View More</button>
        </form><br>
        <form action="delete_property.php" method="POST">
            <label for="property_id">New Alert</label>
            <button type="submit" onclick="return confirm('Student ID: 25227 / Contact: 076 234 5678')">View More</button>
        </form><br>
        <form action="delete_property.php" method="POST">
            <label for="property_id">New Alert</label>
            <button type="submit" onclick="return confirm('Student ID: 25227 / Contact: 076 234 5678')">"View More</button>
        </form><br>
        <form action="delete_property.php" method="POST">
            <label for="property_id">New Alert</label>
            <button type="submit" onclick="return confirm('Student ID: 25227 / Contact: 076 234 5678')">View More</button>
        </form>
    </div>

</body>

</html>