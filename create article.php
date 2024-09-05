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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Create the uploads directory if it doesn't exist
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    // Handle file upload for the image
    if ($_FILES["image"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file;
    } else {
        $image = null; // Set default image if no file is uploaded
    }

    $sql = "INSERT INTO articles (title, author, date, content, image) 
            VALUES ('$title', '$author', '$date', '$content', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Article published successfully.");</script>';
    } else {
        echo '<script>alert("Error publishing article: ' . mysqli_error($conn) . '");</script>';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ece0f6;
        }

        header {
            background-color: #fff;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        span {
            color: black;
            font-size: 25px;
            margin-left: -700px;
        }

        .logo {
            width: 60px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav li {
            margin-right: 1rem;
        }

        nav a {
            color: black;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: center;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropbtn {
            display: flex;
            align-items: center;
        }

        .dropbtn::after {
            content: "";
            display: inline-block;
            width: 0px;
            height: 0px;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 8px solid black;
            /* Triangular arrow */
            margin-left: 5px;
        }

        main {
            padding: 1rem;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #000;
        }

        .logout {
            color: #e00;
        }

        h2 {
            margin-left: 10px;
        }


        /* Card styles */

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            /* Allow cards to wrap to next line if needed */
            margin-top: 20px;
        }

        .card {
            text-decoration: none;
            /* Remove underline from anchor tags */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 600px;
            /* Adjust card width as needed */
            margin: 10px;
            transition: transform 0.3s ease-in-out;
            /* Add hover effect */
        }

        .card:hover {
            transform: scale(1.02);
            /* Slight zoom on hover */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Subtle shadow on hover */
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            text-align: center;
        }

        .card-image {
            width: 380px;
            /* Adjust image width as needed */
            height: 380px;
            /* Adjust image height as needed */
            margin-bottom: 10px;
            /* Add space between image and text content */
        }






        /*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

        /**
 * responsive for larger than 600px screen
 */

        @media (min-width: 600px) {

            /**
   * CUSTOM PROPERTY
   */

            :root {

                /**
     * typography
     */

                --fs-2: 1.875rem;

            }



            /**
   * REUSED STYLE
   */

            .container {
                max-width: 550px;
                margin-inline: auto;
            }

            .has-scrollbar {
                gap: 25px;
                margin-inline: -25px;
                padding-inline: 25px;
                scroll-padding-left: 25px;
            }

            .has-scrollbar>li {
                min-width: calc(50% - 12.5px);
            }

        }





        /**
 * responsive for larger than 768px screen
 */

        @media (min-width: 768px) {

            /**
   * CUSTOM PROPERTY
   */

            :root {

                /**
     * typography
     */

                --fs-1: 2.5rem;
                --fs-5: 0.938rem;
                --fs-6: 0.875rem;

            }



            /**
   * REUSED STYLE
   */

            .container {
                max-width: 720px;
            }

            .btn {
                --fs-5: 1rem;
                padding: 12px 28px;
            }



            /**
   * HEADER
   */

            .header-top {
                padding-block: 5px;
            }

            .header-top .wrapper {
                margin-left: auto;
            }

            .header-top-social-list {
                gap: 12px;
            }

            .header-top-social-link {
                font-size: 1rem;
            }

            .header-top-btn {
                padding: 10px 20px;
            }

            .header-bottom-actions {
                all: unset;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .header-bottom .container {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .header-bottom-actions-btn ion-icon {
                margin-bottom: 0;
            }

            .header-bottom-actions-btn span {
                display: none;
            }

            .header-bottom-actions-btn {
                background: var(--white);
                width: 50px;
                height: 50px;
                box-shadow: var(--shadow-2);
            }


        }





        /**
 * responsive for larger than 992px screen
 */

        @media (min-width: 992px) {

            /**
   * CUSTOM PROPERTY
   */

            :root {

                /**
     * typography
     */

                --fs-1: 3.125rem;
                --fs-4: 1.375rem;

            }



            /**
   * REUSED STYLE
   */

            .container {
                max-width: 970px;
            }

            .btn {
                padding: 15px 40px;
            }



            /**
   * HEADER
   */

            .header-top-list,
            .header-top .wrapper {
                gap: 30px;
            }


        }





        /**
 * responsive for larger than 1200px screen
 */

        @media (min-width: 1200px) {

            /**
   * CUSTOM PROPERTY
   */

            :root {

                /**
     * typography
     */

                --fs-2: 2.75rem;
                --fs-4: 1.5rem;

            }



            /**
   * REUSED STYLE
   */

            .container {
                max-width: 1200px;
            }

            .has-scrollbar>li {
                min-width: calc(33.33% - 16.66px);
            }



            /**
   * HEADER
   */

            .header-bottom {
                padding-block: 30px;
            }

            .header-bottom-actions-btn:last-child,
            .navbar-top,
            .overlay {
                display: none;
            }

            .navbar,
            .navbar.active {
                all: unset;
            }

            .navbar-list {
                display: flex;
                align-items: center;
                gap: 30px;
            }

            .navbar-link {
                color: black;
                --fs-5: 1.125rem;
                text-transform: capitalize;
            }

            .header {
                padding-bottom: 114px;
            }

            .header-bottom {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
            }

            .header.active .header-bottom {
                position: fixed;
                bottom: auto;
                top: -94px;
                padding-block: 20px;
                box-shadow: 0 10px 50px hsla(237, 71%, 52%, 0.2);
                animation: slideDown 0.25s ease-out forwards;
            }

            @keyframes slideDown {
                0% {
                    transform: translateY(0);
                }

                100% {
                    transform: translateY(100%);
                }
            }
        }

        /* Optional styling for the form */
        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            margin: 20px auto;
            padding: 50px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f5f3f1;
        }

        label {
            margin-bottom: 5px;
            text-decoration: none;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50;
            /* Green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h1 {
            margin-left: 10px;

        }

        span {
            color: black;
            font-size: 25px;
            margin-left: -700px;
        }
    </style>
</head>

<body>
    <header>
        <img src="images/Rent_Hub.png" alt="Admin Logo" class="logo">
        <span>Admin Dashboard - Create Article</span>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Create Account</a>
                    <div class="dropdown-content">
                        <a href="admin_create_account_student.php">Student</a>
                        <a href="admin_create_account_warden.php">Warden</a>
                        <a href="admin_create_account_landlord.">Landlord</a>
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
    <form action="create article.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="date">Date:</label>
        <input type="text" id="date" name="date" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="10" required></textarea>

        <label for="image">Featured Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>

        <button type="submit">Publish Article</button>
    </form>

</body>

</html>