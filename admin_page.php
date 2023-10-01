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
            <li><a href="http://localhost/lpu_web_application/admin_page.php">Home</a></li>
            <li><a href="http://localhost/lpu_web_application/employee_registration_save.php">Employee Registration</a></li><!-- Add the desired URL here -->
            <li><a href="#">Employee Report</a></li>
            <li><a href="http://localhost/lpu_web_application/payroll_page.php">Payroll</a></li>
            <li><a href="#">Payroll Report</a></li>
            <li><a href="http://localhost/lpu_web_application/jac_market.php">POS</a></li>
            <li><a href="#">POS Sales Report</a></li>
            <li><a href="http://localhost/lpu_web_application/user_page.php">User Account</a></li>
            <li><a href="http://localhost/lpu_web_application/login_process.php">Logout</a></li>
        </ul>
    </div>

    <div class="header">
        <h1>JAC's Page</h1>
        <p>Sample Admin Page</p>
    </div>

    <div class="content">
        <!-- Your content for each menu option goes here -->
    </div>

</body>
</html>
