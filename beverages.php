<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <title>Beverages</title>

</head>
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
            width: 200px;
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
<body>
    <div class="container">   
        <h1 style="text-align:center; margin-top:10px; font-size:70px; fontfamily:Algerian; color:black">JAC's Market</h1>
            <div style="float:left">
                <div>                    
                    <img src="SDEL01E/Beverages/a1.jpg" data-toggle="tooltip" dataplacement="bottom" title="a1" alt="a1" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">
                    
                    <img src="SDEL01E/Beverages/a2.jpg" data-toggle="tooltip" dataplacement="bottom" title="a2" alt="a2" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">
                    
                    <img src="SDEL01E/Beverages/a3.jpg" data-toggle="tooltip" dataplacement="bottom" title="a3" alt="a3" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a4.jpg" data-toggle="tooltip" dataplacement="bottom" title="a4" alt="a4" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a5.jpg" data-toggle="tooltip" dataplacement="bottom" title="a5" alt="a5" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">
                    </div>

                    <div>
                    <!--Checkbox and name ROW 1-->
                    <input type="checkbox" id="checkbox1" name="checkbox1" style="margin-left:30px;">
                    <label for="checkbox1" id="lbl_checkbox1" value="">A1 (P25)</label>
                    <input type="checkbox" id="checkbox2" name="checkbox2" style="margin-left:95px;">
                    <label for="checkbox2" id="lbl_checkbox2" value="">A2 (P45)</label>
                    <input type="checkbox" id="checkbox3" name="checkbox3" style="margin-left:100px;">
                    <label for="checkbox3" id="lbl_checkbox3" value="">A3 (P55)</label>
                    <input type="checkbox" id="checkbox4" name="checkbox4" style="margin-left:80px;">
                    <label for="checkbox3" id="lbl_checkbox4" value="">A4 (P50)</label>
                    <input type="checkbox" id="checkbox5" name="checkbox5" style="margin-left:100px;">
                    <label for="checkbox3" id="lbl_checkbox5" value="">A5 (P25)</label>
                    </div>
                    
                    <div>

                    <img src="SDEL01E/Beverages/a6.jpg" data-toggle="tooltip" dataplacement="bottom" title="a6" alt="a6" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a7.jpg" data-toggle="tooltip" dataplacement="bottom" title="a7" alt="a7" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a8.png" data-toggle="tooltip" dataplacement="bottom" title="a8" alt="a8" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a9.png" data-toggle="tooltip" dataplacement="bottom" title="a9" alt="a9" width="170" height="180" style="margin-top:30px;border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a10.jpg" data-toggle="tooltip" dataplacement="bottom" title="a10" alt="a10" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">
                    </div>

                    <div>
                    <!--Checkbox and name ROW 1-->
                    <input type="checkbox" id="checkbox6" name="checkbox6" style="margin-left:30px;">
                    <label for="checkbox1" id="lbl_checkbox6" value="">A6 (P25)</label>
                    <input type="checkbox" id="checkbox7" name="checkbox7" style="margin-left:95px;">
                    <label for="checkbox2" id="lbl_checkbox7" value="">A7 (P75)</label>
                    <input type="checkbox" id="checkbox8" name="checkbox8" style="margin-left:90px;">
                    <label for="checkbox3" id="lbl_checkbox8" value="">A8 (P100)</label>
                    <input type="checkbox" id="checkbox9" name="checkbox9" style="margin-left:80px;">
                    <label for="checkbox3" id="lbl_checkbox9" value="">A9 (P100)</label>
                    <input type="checkbox" id="checkbox10" name="checkbox10" style="margin-left:90px;">
                    <label for="checkbox3" id="lbl_checkbox10" value="">A10 (P150)</label>
                    </div>

                    <div>
                    <img src="SDEL01E/Beverages/a11.jpg" data-toggle="tooltip" dataplacement="bottom" title="a11" alt="a11" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a12.jpg" data-toggle="tooltip" dataplacement="bottom" title="a12" alt="a12" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a13.jpg" data-toggle="tooltip" dataplacement="bottom" title="a13" alt="a13" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a14.jpg" data-toggle="tooltip" dataplacement="bottom" title="a14" alt="a14" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a15.jpg" data-toggle="tooltip" dataplacement="bottom" title="a15" alt="a15" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">
                    </div>

                    <div>
                    <!--Checkbox and name ROW 1-->
                    <input type="checkbox" id="checkbox11" name="checkbox11" style="margin-left:30px;">
                    <label for="checkbox1" id="lbl_checkbox11" value="">A11 (P50)</label>
                    <input type="checkbox" id="checkbox12" name="checkbox12" style="margin-left:95px;">
                    <label for="checkbox2" id="lbl_checkbox12" value="">A12 (P80)</label>
                    <input type="checkbox" id="checkbox13" name="checkbox13" style="margin-left:80px;">
                    <label for="checkbox3" id="lbl_checkbox13" value="">A13 (P150)</label>
                    <input type="checkbox" id="checkbox14" name="checkbox14" style="margin-left:70px;">
                    <label for="checkbox3" id="lbl_checkbox14" value="">A14 (P200)</label>
                    <input type="checkbox" id="checkbox15" name="checkbox15" style="margin-left:70px;">
                    <label for="checkbox3" id="lbl_checkbox15" value="">A15 (P175)</label>
                    </div>
                    
                    <div>
                    <img src="SDEL01E/Beverages/a16.jpg" data-toggle="tooltip" dataplacement="bottom" title="a16" alt="a16" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a17.jpg" data-toggle="tooltip" dataplacement="bottom" title="a17" alt="a17" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a18.jpg" data-toggle="tooltip" dataplacement="bottom" title="a18" alt="a18" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a19.png" data-toggle="tooltip" dataplacement="bottom" title="a19" alt="a19" width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">

                    <img src="SDEL01E/Beverages/a20.jpg" data-toggle="tooltip" dataplacement="bottom" title="a20"  alt="a20"width="170" height="180" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px ">                    
                    </div>

                    <div>
                    <!--Checkbox and name ROW 1-->
                    <input type="checkbox" id="checkbox16" name="checkbox16" style="margin-left:30px;">
                    <label for="checkbox1" id="lbl_checkbox16" value="">A16 (P300)</label>
                    <input type="checkbox" id="checkbox17" name="checkbox17" style="margin-left:75px;">
                    <label for="checkbox2" id="lbl_checkbox17" value="">A17 (P200)</label>
                    <input type="checkbox" id="checkbox18" name="checkbox18" style="margin-left:80px;">
                    <label for="checkbox3" id="lbl_checkbox18" value="">A18 (P150)</label>
                    <input type="checkbox" id="checkbox19" name="checkbox19" style="margin-left:70px;">
                    <label for="checkbox3" id="lbl_checkbox19" value="">A19 (P100)</label>
                    <input type="checkbox" id="checkbox20" name="checkbox20" style="margin-left:70px;">
                    <label for="checkbox3" id="lbl_checkbox20" value="">A20 (P175)</label>
                    </div>
            </div>           
    </div>

    <div class="row">
    <div class="col-md-18">
    <!-- Left Column: Order Details -->
        <h2>Order Details</h2>
        <div class="form-group">
            <label for="item_name">Name of Item:</label>
            <input type="text" class="form-control" id="item_name" name="item_name" disabled>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity" min="1" onchange="updateTotalPrice()">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" disabled>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="text" class="form-control" id="total_price" name="total_price" disabled>
        </div>
        <div class="form-group">
            <label for="discount">Discount Amount:</label>
            <input type="text" class="form-control" id="discount" name="discount" disabled>
        </div>
        <div class="form-group">
            <label for="discounted_amount">Discounted Amount per item:</label>
            <input type="text" class="form-control" id="discounted_amount" name="discounted_amount" disabled>
        </div>
        <div class="form-group">
            <label for="total_discount_given">Total Discount Given:</label>
            <input type="text" class="form-control" id="total_discount_given" name="total_discount_given" disabled>
        </div>
        <div class="form-group">
            <label for="total_discounted_amount">Total Discounted Price:</label>
            <input type="text" class="form-control" id="total_discounted_amount" name="total_discounted_amount" disabled>
        </div>
        <div class="form-group">
            <label for="cash_given">Cash Given:</label>
            <input type="text" class="form-control" id="cash_given" name="cash_given">
        </div>
        <div class="form-group">
            <label for="change">Change:</label>
            <input type="text" class="form-control" id="change" name="change" disabled>
        </div>
        <div>
        <button type="button" id="calculateButton" onclick="calculateChange()" onclick="updateDiscountAmount()" onclick="updateTotalPrice()" class="btn btn-primary" href=#jac_market.php>Calculate Change</button>
        </div>
    </div>

    <div class="col-md-18">
    <!-- Right Column: Calculator for Order Details -->
    <h2>Calculator</h2>

    <!-- Discount Options: Radio Buttons -->
    <div class="form-group">
        <label>Discount Options:</label>
        <div>
            <label>
                <input type="radio" name="discount_option" value="senior_citizen" onchange="updateDiscountAmount()"> Senior Citizen
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="with_disc_card" onchange="updateDiscountAmount()"> With Discount Card
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="employee_disc" onchange="updateDiscountAmount()"> Employee Discount
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="no_discount" checked onchange="updateDiscountAmount()"> No Discount
            </label>
        </div>
    </div>

    <!-- Calculator: Enter and Arithmetic Buttons -->
    <div>
        <!-- Calculator Display -->
        <input type="text" id="calculatorInput" class="form-control" disabled>
    </div>
    <div>
        <!-- Arithmetic Calculator -->
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('7')">7</button>
            <button class="btn btn-secondary" onclick="addToCalculator('8')">8</button>
            <button class="btn btn-secondary" onclick="addToCalculator('9')">9</button>
            <button class="btn btn-secondary" onclick="addToCalculator('+')">+</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('4')">4</button>
            <button class="btn btn-secondary" onclick="addToCalculator('5')">5</button>
            <button class="btn btn-secondary" onclick="addToCalculator('6')">6</button>
            <button class="btn btn-secondary" onclick="addToCalculator('-')">-</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('1')">1</button>
            <button class="btn btn-secondary" onclick="addToCalculator('2')">2</button>
            <button class="btn btn-secondary" onclick="addToCalculator('3')">3</button>
            <button class="btn btn-secondary" onclick="addToCalculator('*')">*</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('0')">0</button>
            <button class="btn btn-secondary" onclick="addToCalculator('/')">/</button>
            <button class="btn btn-secondary" onclick="clearCalculator()">C</button>
            <button class="btn btn-success" onclick="calculate()">=</button>
        </div>
        <div>
            <!-- Enter Button -->
            <button id="enterButton" class="btn btn-primary">Enter</button>
        </div>
    </div>
</div>

    </div>
</div>

<script>
    // Function to update input boxes when a checkbox is checked
    function updateInputBoxes(checkboxId, item_name, price) {
        var checkbox = document.getElementById(checkboxId);
        var itemNameInput = document.getElementById('item_name');
        var itemPriceInput = document.getElementById('price');

        if (checkbox.checked) {
            itemNameInput.value = item_name;
            itemPriceInput.value = price;
        } else {
            itemNameInput.value = '';
            itemPriceInput.value = '';
        }
    }

    function updateDiscountAmount() {
        var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
        var discountInput = document.getElementById('discount');

        if (discountOption === "no_discount") {
            discountInput.value = ''; // Clear the input when no discount is selected
            discountInput.disabled = true;
        } else if (discountOption === "senior_citizen" || discountOption === "with_disc_card") {
            discountInput.value = '20%'; // Set the input value to '20%'
            discountInput.disabled = true;
        } else if (discountOption === "employee_disc") {
            discountInput.value = '30%'; // Set the input value to '30%'
            discountInput.disabled = true;
        } else {
            discountInput.value = ''; // Clear the input when no specific discount is selected
            discountInput.disabled = false;
        }
    }

    function updateTotalPrice() {
        // Get the quantity and price per item
        var quantity = parseFloat(document.getElementById('quantity').value);
        var pricePerItem = parseFloat(document.getElementById('price').value);
        var cashgiven= parseFloat(document.getElementById('cash_given').value);

        // Calculate the total price
        var totalPrice = quantity * pricePerItem;

        // Get the selected discount option
        var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
        var discountAmount = 0;

        // Calculate the discount amount based on the selected option
        if (discountOption === "senior_citizen" || discountOption === "with_disc_card") {
            discountAmount = 0.2 * pricePerItem; // 20% discount
        } else if (discountOption === "employee_disc") {
            discountAmount = 0.3 * pricePerItem; // 30% discount
        }

        // Calculate the discounted price per item
        var discountedPricePerItem = pricePerItem - discountAmount;
        var totalpriceDiscount= totalPrice-(discountAmount*quantity);

        // Calculate the total discounted price
        var totalDiscountedPrice = quantity * discountedPricePerItem;

        // Update the "Total Price" input field with the calculated value
        document.getElementById('total_price').value = totalPrice.toFixed(2); // Display the result with two decimal places

        // Update the "Discounted Amount per Item" input field with the calculated value
        document.getElementById('discounted_amount').value = (discountAmount).toFixed(2);
        
        //Update the "Total Discounted Given" input field with the calculated value
        document.getElementById('total_discount_given').value=(discountAmount*quantity).toFixed(2);

        //Update the "Total Price With Discount" input field with the calculated value
        document.getElementById('total_discounted_amount').value = (totalpriceDiscount).toFixed(2);

        //Update the "Change" input field with the calculated value
        document.getElementById('Change').value=(cashgiven-totalpriceDiscount).toFixed(2)
    }

    function calculateChange() {
        // Get the total price with discount
        var totalPriceDiscount = parseFloat(document.getElementById('total_discounted_amount').value);

        // Get the cash given by the customer
        var cashGiven = parseFloat(document.getElementById('cash_given').value);

        // Calculate the change
        var change = cashGiven - totalPriceDiscount;

        // Display the change in the "Change" input field
        document.getElementById('change').value = change.toFixed(2);
    }

    // Add event listeners to each checkbox
    document.getElementById('checkbox1').addEventListener('change', function() {
            updateInputBoxes('checkbox1', 'A1', '25');
        });
        document.getElementById('checkbox2').addEventListener('change', function() {
            updateInputBoxes('checkbox2', 'A2', '45');
        });
        document.getElementById('checkbox3').addEventListener('change', function() {
            updateInputBoxes('checkbox3', 'A3', '55');
        });
        document.getElementById('checkbox4').addEventListener('change', function() {
            updateInputBoxes('checkbox4', 'A4', '50');
        });
        document.getElementById('checkbox5').addEventListener('change', function() {
            updateInputBoxes('checkbox5', 'A5', '25');
        });
        document.getElementById('checkbox6').addEventListener('change', function() {
            updateInputBoxes('checkbox6', 'A6', '25');
        });
        document.getElementById('checkbox7').addEventListener('change', function() {
            updateInputBoxes('checkbox7', 'A7', '70');
        });
        document.getElementById('checkbox8').addEventListener('change', function() {
            updateInputBoxes('checkbox8', 'A8', '100');
        });
        document.getElementById('checkbox9').addEventListener('change', function() {
            updateInputBoxes('checkbox9', 'A9', '100');
        });
        document.getElementById('checkbox10').addEventListener('change', function() {
            updateInputBoxes('checkbox10', 'A10', '150');
        });
        document.getElementById('checkbox11').addEventListener('change', function() {
            updateInputBoxes('checkbox11', 'A11', '50');
        });
        document.getElementById('checkbox12').addEventListener('change', function() {
            updateInputBoxes('checkbox12', 'A12', '80');
        });
        document.getElementById('checkbox13').addEventListener('change', function() {
            updateInputBoxes('checkbox13', 'A13', '150');
        });
        document.getElementById('checkbox14').addEventListener('change', function() {
            updateInputBoxes('checkbox14', 'A14', '200');
        });
        document.getElementById('checkbox15').addEventListener('change', function() {
            updateInputBoxes('checkbox15', 'A15', '175');
        });
        document.getElementById('checkbox16').addEventListener('change', function() {
            updateInputBoxes('checkbox16', 'A16', '300');
        });
        document.getElementById('checkbox17').addEventListener('change', function() {
            updateInputBoxes('checkbox17', 'A17', '200');
        });
        document.getElementById('checkbox18').addEventListener('change', function() {
            updateInputBoxes('checkbox18', 'A18', '150');
        });
        document.getElementById('checkbox19').addEventListener('change', function() {
            updateInputBoxes('checkbox19', 'A19', '100');
        });
        document.getElementById('checkbox20').addEventListener('change', function() {
            updateInputBoxes('checkbox20', 'A20', '175');
        });
        // Add event listeners for other checkboxes in a similar manner

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>