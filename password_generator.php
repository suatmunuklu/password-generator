<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $uppercase = isset($_POST["uppercase"]) ? "ABCDEFGHIJKLMNOPQRSTUVWXYZ" : "";
    $lowercase = isset($_POST["lowercase"]) ? "abcdefghijklmnopqrstuvwxyz" : "";
    $numbers = isset($_POST["numbers"]) ? "0123456789" : "";
    $symbols = isset($_POST["symbols"]) ? "!@#$%^&*()_+-=[]{}|;:,.<>?/" : "";

    $characters = $uppercase . $lowercase . $numbers . $symbols;
    $charactersLength = strlen($characters);
    
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    echo '<p style="text-align: center; margin-top: 20px; font-weight: bold;">Generated Password: ' . $password . '</p>';
}
?>
