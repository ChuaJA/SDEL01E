<!DOCTYPE html>
<html>
<head>
    <title>Button Function Example</title>
</head>
<body>
    <p id="displayText">Click the button to change this text.</p>
    <button id="changeButton">Change Text</button>

    <script>
        // Get references to the HTML elements
        const displayText = document.getElementById("displayText");
        const changeButton = document.getElementById("changeButton");

        // Function to change the text when the button is clicked
        function changeText() {
            displayText.textContent = "Text changed!";
        }

        // Attach the function to the button's click event
        changeButton.addEventListener("click", changeText);
    </script>
</body>
</html>
