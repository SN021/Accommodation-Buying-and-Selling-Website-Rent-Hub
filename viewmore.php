<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Requests</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f5f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }

        h1 {
            color: #164a41;
            text-align: center;
            margin-bottom: 15px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #164a41;
        }

        td form {
            display: flex;
            align-items: center;
        }

        select {
            margin-right: 10px;
        }

        button[type="submit"] {
            background-color: #20bf6b;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;

        }

        button[type="submit"]:hover {
            background-color: #2ac97d;
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
                    <a href="#" class="dropbtnn">Reservation Requests </a>
                </li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Reservation Requests Handling</h1>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Date</th>
                <th>Property Details</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>April 10, 2024</td>
                <td>Property Name, Location, Price</td>
                <td>
                    <form action="handle_reservation.php" method="POST">
                        <input type="hidden" name="reservation_id" value="1">
                        <button type="submit">Accept</button>
                        <button type="submit">Reject</button>
                    </form>
                </td>
            </tr>
            <!-- Additional rows for other reservation requests -->
        </table>
    </div>
</body>

</html>