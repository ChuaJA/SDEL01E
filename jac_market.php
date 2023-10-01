<!DOCTYPE html>
<html>
<head>
    <title>JAC's Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row; /* Set the main direction to row */
            min-height: 100vh;
        }

        .header {
            background-color: #f5f5f5; /* Change the background color to #f5f5f5 */
            color: #000000;
            padding: 10px 0;
            text-align: middle;
            flex: 1; /* Take up 1 part of the row */
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Align to the top */
            align-items: center; /* Center horizontally */
        }

        .header h1 {
            margin: 0;
            font-size: 50px;
        }

        .header p {
            margin: 10px 0;
            font-size: 25px;
        }

        .content {
            background-color: #f5f5f5; /* Change the background color to #f5f5f5 */
            flex: 2; /* Fill the rest of the space with #f5f5f5 background */
            padding: 20px;
            color: #fff;
        }

        .menu {
            background-color: #000000;
            text-align: left;
            padding: 5px;
            width: 250px;
        }

        .menu ul {
            list-style-type: disc; /* Add bullets to the list items */
            padding: 0;
        }

        .menu ul li {
            margin: 20px 0;
        }

        .menu a {
            text-decoration: none;
            color: #fff; /* White color for the text */
            font-weight: bold;
            font-size: 20px;
            display: block;
        }

        .menu a:hover {
            color: #0000ff; /* Change the text color on hover */
        }
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="http://localhost/lpu_web_application/jac_market.php">Home</a></li>
            <li><a href="http://localhost/lpu_web_application/beverages.php">Beverages</a></li>
            <li><a href="http://localhost/lpu_web_application/books.php">Books</a></li>
            <li><a href="http://localhost/lpu_web_application/instruments.php">Instruments</a></li>
            <li><a href="http://localhost/lpu_web_application/motors.php">Motors</a></li>
            <li><a href="http://localhost/lpu_web_application/shoes.php">Shoes</a></li>
        </ul>
    </div>

    <div class="header">
        <h1>JAC's Market</h1>
        <p>Welcome to JAC's Market</p>
    </div>

    <div class="content">
        <!-- Your content for each menu option goes here -->
    </div>

</body>
</html>
