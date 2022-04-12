<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Pyramid Volume Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Calculating the Volume of a Right Triangle-Based Pyramid in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Calculating the Volume of a Right Triangle-Based Pyramid in PHP</h1>"; ?>
    <!-- Div for style -->
    <div id="first">
      <?php echo "<p>Welcome! This web page will use your input to calculate the volume of a right triangle-based pyramid in PHP. See the image below for the formula used to complete these calculations. Please input the dimensions of the base and the height of the pyramid in the form below:</p>"; ?>
      <img src="./images/formulas.png" alt="formula: abh/2">
    </div>
    <!-- Second div for style -->
    <div id="second">
      <?php echo "<h3>Your Input:</h3>"; ?>
      <form action="./calculate.php" method="post" target="results">
        <label for="height-base">Height of the pyramid's triangular base (in cm)</label>
        <input type="number" step="0.01" min="0" name="height-base" placeholder="Base height..."><br><br>
        <label for="base-length">Base length of the pyramid's triangular base (in cm)</label>
        <input type="number" step="0.01" min="0" name="base-length" placeholder="Base length..."><br><br>
        <label for="height-pyramid">Height of the pyramid</label>
        <input type="number" step = "0.01" min="0" name="height-pyramid" placeholder="Pyramid height..."><br><br>
        <input type="submit" value="Calculate">
      </form>
    </div>
    <!-- Last div to fix width of iframe -->
    <div id="width">
      <iframe id="third" name="results">
      </iframe>
    </div>
  </body>
</html>
