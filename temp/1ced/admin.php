<!DOCTYPE html>
<html>
<head>
    <title>Clatybombom's Corp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row; /* Set the main direction to row */
            min-height: 100vh;
        }

        .header {
            background-color: #ccc; /* Change the background color to #ccc */
            color: #000;
            padding: 20px 0;
            text-align: middle;
            flex: 1; /* Take up 1 part of the row */
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Align to the top */
            align-items: center; /* Center horizontally */
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            margin: 10px 0;
            font-size: 18px;
        }

        .content {
            background-color: #ccc; /* Change the background color to #ccc */
            flex: 2; /* Fill the rest of the space with #ccc background */
            padding: 20px;
            color: #fff;
        }

        .menu {
            background-color: #333;
            text-align: left;
            padding: 20px;
            width: 200px;
        }

        .menu ul {
            list-style-type: disc; /* Add bullets to the list items */
            padding: 0;
        }

        .menu ul li {
            margin: 10px 0;
        }

        .menu a {
            text-decoration: none;
            color: #888; /* Gray color for the text */
            font-weight: bold;
            font-size: 18px;
            display: block;
        }

        .menu a:hover {
            color: #fff; /* Change the text color on hover */
        }
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="http://localhost/lpuc_web_development/admin.php#">Home</a></li>
            <li><a href="http://localhost/lpuc_web_development/form.php">Employee Registration</a></li><!-- Add the desired URL here -->
            <li><a href="#">Employee Report</a></li>
            <li><a href="http://localhost/lpuc_web_development/payroll.php">Payroll</a></li>
            <li><a href="#">Payroll Report</a></li>
            <li><a href="#">POS</a></li>
            <li><a href="#">POS Sales Report</a></li>
            <li><a href="http://localhost/lpuc_web_development/user.php">User Account</a></li>
            <li><a href="http://localhost/lpuc_web_development/login.php">Logout</a></li>
        </ul>
    </div>

    <div class="header">
        <h1>BLINGBLING'S CORP</h1>
        <p>The future is now! Convert to Transhuman...</p>
    </div>

    <div class="content">
        <!-- Your content for each menu option goes here -->
    </div>

</body>
</html>
