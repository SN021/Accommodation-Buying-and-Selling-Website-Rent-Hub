<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt=" Logo" class="logo">
        <span>Warden Dashboard</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="wardenmap.php" class="dropbtn">Map</a>

                </li>
                <li class="dropdown">
                    <a href="viewarticle.php" class="dropbtn">View Articles</a>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <h2>Welcome, Warden!</h2>
    <div class="card-container">
        <a href="wardenmap.php" class="card">
            <img src="images/9.png" alt="Warden Icon" class="card-image">
            <h2>Map</h2>
            <p>map of the property</p>
        </a>
        <a href="viewarticle.php" class="card">
            <img src="images/3.png" alt="Article Icon" class="card-image">
            <h2>View Article</h2>
            <p>View, all published articles.</p>
        </a>
    </div>
</body>

</html>