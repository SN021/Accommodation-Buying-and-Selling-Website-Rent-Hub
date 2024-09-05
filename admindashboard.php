<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Admin Logo" class="logo">
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
    <h2>Welcome, Admin!</h2>

    <div class="card-container">
        <a href="admin_create_account_warden.php" class="card">
            <img src="images/6.png" alt="Warden Icon" class="card-image">
            <h2>Manage Wardens</h2>
            <p>View, edit, and delete warden accounts.</p>
        </a>
        <a href="admin_create_account_landlord.php" class="card">
            <img src="images/7.png" alt="Landlord Icon" class="card-image">
            <h2>Manage Landlords</h2>
            <p>View, edit, and delete landlord accounts.</p>
        </a>
        <a href="admin_create_account_student.php" class="card">
            <img src="images/4.png" alt="Student Icon" class="card-image">
            <h2>Manage Students</h2>
            <p>View, edit, and delete student accounts.</p>
        </a>
        <a href="create article.php" class="card">
            <img src="images/3.png" alt="Article Icon" class="card-image">
            <h2>Create Articles</h2>
            <p>View,create and manage all published articles.</p>
        </a>
    </div>


</body>

</html>