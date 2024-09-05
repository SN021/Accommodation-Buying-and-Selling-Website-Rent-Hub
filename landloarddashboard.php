<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landlord Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
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
    <h2>Welcome, Landlord!</h2>

    <div class="card-container">
        <a href="addproperty.php" class="card">
            <img src="images/8.png" alt="Warden Icon" class="card-image">
            <h2>Property Details</h2>
            <p>Add,delete,update property details to the database.</p>
        </a>
        <a href="#" class="card">
            <img src="images/8.png" alt="Article Icon" class="card-image">
            <h2>Manage Reservation</h2>
            <p>Accept or Decline reservations for properties.</p>
        </a>
    </div>

</body>

</html>