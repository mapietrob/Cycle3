<?php
// processOrder.php
require_once "header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assume $pdo is your database connection from 'connect.php'

    // Extract and sanitize input
    $breadType = htmlspecialchars($_POST['breadType']);
    $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];

    // Calculate total cost based on selected options
    $totalCost = calculateCost($breadType, $toppings);

    // Encode toppings as JSON
    $encodedToppings = json_encode($toppings);

    // Prepare SQL and bind parameters
    $stmt = $pdo->prepare("INSERT INTO orders (breadType, toppings, totalCost) VALUES (:breadType, :toppings, :totalCost)");
    $stmt->bindParam(':breadType', $breadType);
    $stmt->bindParam(':toppings', $encodedToppings); // Pass the variable, not the function call
    $stmt->bindParam(':totalCost', $totalCost);

    // Execute
    if ($stmt->execute()) {
        // Display receipt
        echo "<h2>Order Receipt</h2>";
        echo "<p><strong>Bread Type:</strong> $breadType</p>";
        echo "<p><strong>Toppings:</strong> " . implode(', ', $toppings) . "</p>";
        echo "<p><strong>Total Cost:</strong> $" . number_format($totalCost, 2) . "</p>";
    } else {
        echo "Error: " . $stmt->error;
    }
}

function calculateCost($breadType, $toppings) {
    // Define toppings cost
    $toppingsCost = [
        'lettuce' => 0.50,
        'tomato' => 0.50,
        'cheese' => 1.00
    ];

    // Initialize total cost with base cost of bread
    $totalCost = ($breadType == 'white') ? 2.00 : 2.50; // Example base costs

    // Add cost of selected toppings
    foreach ($toppings as $topping) {
        if (array_key_exists($topping, $toppingsCost)) {
            $totalCost += $toppingsCost[$topping];
        }
    }

    return $totalCost;
}
?>
