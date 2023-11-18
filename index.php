<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Password Generator</h1>
        <form action="" method="post">
            <label for="length">Password Length:</label>
            <input type="number" id="length" name="length" min="6" max="60" value="12" required>

            <label for="uppercase">Include Uppercase Letters:</label>
            <input type="checkbox" id="uppercase" name="uppercase" checked>

            <label for="lowercase">Include Lowercase Letters:</label>
            <input type="checkbox" id="lowercase" name="lowercase" checked>

            <label for="numbers">Include Numbers:</label>
            <input type="checkbox" id="numbers" name="numbers" checked>

            <label for="symbols">Include Symbols:</label>
            <input type="checkbox" id="symbols" name="symbols" checked>

            <button type="submit">Generate Password</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("password_generator.php");
        }
        ?>
    </div>
</body>
</html>
