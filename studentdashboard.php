<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Logo" class="logo">
        <span>Student Dashboard</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="viewarticle.php" class="dropbtnn">Browse Article </a>
                </li>
                <li class="dropdown">
                    <a href="viewpropertydetails.php" class="dropbtnn">Property Details</a>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <h2>Welcome, Student!</h2>

    <div class="card-container">
        <a href="viewarticle.php" class="card">
            <img src="images/6.png" alt="Warden Icon" class="card-image">
            <h2>Browse Article</h2>
            <p>View articles.</p>
        </a>
        <a href="viewpropertydetails.php" class="card">
            <img src="images/7.png" alt="Landlord Icon" class="card-image">
            <h2>Property Details</h2>
            <p>View property details.</p>
        </a>
    </div>


</body>

</html>