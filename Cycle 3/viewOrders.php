<?php
// viewOrders.php
require_once "header.php";

// Fetch all orders from the database
$stmt = $pdo->query("SELECT * FROM orders");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display orders
echo "<h2>All Orders</h2>";
echo "<ul>";
foreach ($orders as $order) {
    echo "<li>";
    echo "<strong>Bread Type:</strong> " . $order['breadType'] . " | ";
    echo "<strong>Toppings:</strong> " . implode(', ', json_decode($order['toppings'])) . " | ";
    echo "<strong>Total Cost:</strong> $" . number_format($order['totalCost'], 2);
    echo "</li>";
}
echo "</ul>";
?>
