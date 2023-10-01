<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trader Hugh</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Add this CSS rule to set the background image */
        body {
            background-image: url('background/that.jpg'); /* Adjust the path accordingly */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Style for the collapsible tab */
        .collapsible-tab {
            background-color: #f1f1f1;
            padding: 10px;
            cursor: pointer;
        }

        .icon {
            float: left;
            margin-right: 10px;
        }

        .options-column {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100%;
            background-color: #ccc;
            overflow-y: scroll;
            z-index: 1;q
        }

        .options-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .options-list-item {
            padding: 10px;
            cursor: pointer;
        }

        .options-list-item:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<div class="container page_border"> 
    <h1 style="text-align:center; margin-top:10px; font-size:70px; font-family:Algerian; color:black">Clatybombom Shop</h1>
    <div style="float:left" >
        <div class="pic_group">
            <div class="pic_option">
                <h1 style="text-align:center; margin-top:10px; font-size:30px; font-family:Algerian; color:black">Pen Shopee</h1>
                <div class="collapsible-tab" onclick="toggleOptions()">
                    <div class="icon">&#9776;</div> <!-- Three parallel lines icon -->
                    More Shops
                </div>
                <!-- Hidden options column -->
                <div class="options-column" id="optionsColumn">
                    <ul class="options-list">
                        <li class="options-list-item"><a href="perfume.php">Perfume Collection</a></li>
                        <li class="options-list-item"><a href="burger.php">Burger Menu</a></li>
                        <li class="options-list-item"><a href="kitchen.php">Kitchen Utensil Shop</a></li>
                        <li class="options-list-item"><a href="mouse.php">Mouse Collection</a></li>
                    </ul>
                </div>
                <div class="row">
                    <script>
                        const perfumeNames = [
                            "Bic",
                            "Caran Dashe",
                            "Dong a Gelpen",
                            "Dong a Hexaplus",
                            "Faber Castell HB2 Pencil",
                            "Faber Castell Pen",
                            "Pilot Gtech",
                            "Mongol 2 Pencil",
                            "Mongol Pen",
                            "Muji Gelpen",
                            "Palomino Calcedar Pencil",
                            "Panda Pen",
                            "Prismacolor Pencil",
                            "Rotring Isograph Pen",
                            "Rotring Mechanical Pensil",
                            "Staedtler Tech pen",
                            "Uniball Pen",
                            "Unipin Fineliner Pen",
                            "Waterman Pen",
                            "Zebra Sarasa Pen",
                        ];

                        for (let i = 0; i < perfumeNames.length; i++) {
                            const perfumeName = perfumeNames[i];
                            document.write(`
                                <div class="col-md-3">
                                    <div>
                                        <img src="pen_images/${i + 1}.jpg" data-toggle="tooltip" data-placement="center" title="pen" width="170" height="180" alt="${perfumeName}">
                                        <div>
                                            <input type="checkbox" name="check_${i + 1}" id="check_${i + 1}">
                                            <label for="check_${i + 1}">${perfumeName}</label>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    </script>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <!-- Left Column: Order Details -->
        <h2>Order Details</h2>
        <div class="form-group">
            <label for="item_name">Name of Item:</label>
            <input type="text" class="form-control" id="item_name" name="item_name">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="discount">Discount Amount:</label>
            <input type="text" class="form-control" id="discount" name="discount">
        </div>
        <div class="form-group">
            <label for="discounted_amount">Discounted Amount:</label>
            <input type="text" class="form-control" id="discounted_amount" name="discounted_amount">
        </div>
        <div class="form-group">
            <label for="total_quantity">Total Quantity:</label>
            <input type="text" class="form-control" id="total_quantity" name="total_quantity">
        </div>
        <div class="form-group">
            <label for="total_discount_given">Total Discount Given:</label>
            <input type="text" class="form-control" id="total_discount_given" name="total_discount_given">
        </div>
        <div class="form-group">
            <label for="total_discounted_amount">Total Discounted Amount:</label>
            <input type="text" class="form-control" id="total_discounted_amount" name="total_discounted_amount">
        </div>
        <div class="form-group">
            <label for="cash_given">Cash Given:</label>
            <input type="text" class="form-control" id="cash_given" name="cash_given">
        </div>
        <div class="form-group">
            <label for="change">Change:</label>
            <input type="text" class="form-control" id="change" name="change">
        </div>
    </div>

    <div class="col-md-6">
    <!-- Right Column: Calculator for Order Details -->
    <h2>Calculator</h2>

    <!-- Discount Options: Radio Buttons -->
    <div class="form-group">
        <label>Discount Options:</label>
        <div>
            <label>
                <input type="radio" name="discount_option" value="senior_citizen"> Senior Citizen
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="with_disc_card"> With Discount Card
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="employee_disc"> Employee Discount
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="no_discount" checked> No Discount
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
    function toggleOptions() {
        var optionsColumn = document.getElementById("optionsColumn");
        if (optionsColumn.style.display === "block") {
            optionsColumn.style.display = "none";
        } else {
            optionsColumn.style.display = "block";
        }
    }
 $(document).ready(function(){
 $('[data-toggle="tooltip"]').tooltip(); 
 });
</script>
</body>
</html>
