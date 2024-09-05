<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Article</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ece0f6;
        }

        .container {
            max-width: 1500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f3f1;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .articles {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .article {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .article h2 {
            margin-bottom: 10px;
        }

        .article p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <header>
        <img src="images/Rent_Hub.png" alt="Logo" class="logo">
        <span>View Article</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Create Account</a>
                    <div class="dropdown-content">
                        <a href="#">Student</a>
                        <a href="#">Warden</a>
                        <a href="#">Landlord</a>
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
        <h1>Articles</h1>
        <div class="articles">
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
            // Query to retrieve articles
            $sql = "SELECT * FROM articles";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='article'>";
                    echo "<h2>{$row['title']}</h2>";
                    echo "<p>{$row['content']}</p>";
                    echo "<p><strong>Author:</strong> {$row['author']}</p>";
                    echo "<p><strong>Date:</strong> {$row['date']}</p>";
                    echo "<img src='{$row['image']}' alt='Article Image' style='max-width: 100%;'>";
                    echo "</div>";
                }
            } else {
                echo "<p>No articles found.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html>