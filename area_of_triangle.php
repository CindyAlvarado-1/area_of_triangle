<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculation</title>
</head>
<body>
    <h1>Triangle Area Calculator</h1>
    <form method="post" action="">
        <label for="base">Base:</label>
        <input type="text" id="base" name="base" step="any" required>
        <br>
        <label for="height">Height:</label>
        <input type="text" id="height" name="height" step="any" required>
        <br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>


    <?php
    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form submission
        $base = $_POST["base"];
        $height = $_POST["height"];

        if (is_numeric($base) && is_numeric($height)) {
            $area = 0.5 * $base * $height;
            echo "<h2> The Triangle Area is: " . $area . "</h2>";
        }else{
            echo "<h2>ERROR: Please enter valid number for Base and Height.</h2>";


        }
   }
   // Adding name and current date
   echo "<p>Created by: Cindy Alvarado</p>";
   echo "<p>Date: " . date("Y-m-d") . "</p>";
   ?>
</body>
</html>
