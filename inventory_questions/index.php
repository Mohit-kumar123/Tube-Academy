<!-- 
use an associative array to store the inventoory items with their quantities
and prices- e.g['item'=>['quantity'=>10,'price'=>50]]
1. add new item:
prompt the user to add a new item to the inventory
2. update item quantity
prompt the user to update the quantity of an existing item 
3.remove items:
prompt the user to remove an item from the inventory.

4.calculate total value:
calculate and display the total value of the inventory[quality*price]
if-else,switch,foreach,while for managing inventory and user choices -->


<?php
// Start the session to persist inventory data across page reloads
session_start();

// Initialize inventory if it's not already set in the session
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [
        "item1" => ["quantity" => 10, "price" => 50],
        "item2" => ["quantity" => 5, "price" => 100],
    ];
}

$inventory = &$_SESSION['inventory'];

// Function to calculate the total value of the inventory
function calculateTotalValue($inventory) {
    $totalValue = 0;
    foreach ($inventory as $item => $details) {
        $totalValue += $details['quantity'] * $details['price'];
    }
    return $totalValue;
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    switch ($action) {
        case 'add':
            $newItem = trim($_POST['newItem']);
            $newQuantity = (int)$_POST['newQuantity'];
            $newPrice = (float)$_POST['newPrice'];
            $inventory[$newItem] = ["quantity" => $newQuantity, "price" => $newPrice];
            $message = "$newItem added successfully.";
            break;

        case 'update':
            $updateItem = trim($_POST['updateItem']);
            $updateQuantity = (int)$_POST['updateQuantity'];
            if (isset($inventory[$updateItem])) {
                $inventory[$updateItem]['quantity'] = $updateQuantity;
                $message = "$updateItem quantity updated successfully.";
            } else {
                $message = "$updateItem not found in the inventory.";
            }
            break;

        case 'remove':
            $removeItem = trim($_POST['removeItem']);
            if (isset($inventory[$removeItem])) {
                unset($inventory[$removeItem]);
                $message = "$removeItem removed successfully.";
            } else {
                $message = "$removeItem not found in the inventory.";
            }
            break;
    }
}

$totalValue = calculateTotalValue($inventory);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
</head>
<body>
    <h1>Inventory Management</h1>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <h2>Current Inventory</h2>
    <table border="1">
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php foreach ($inventory as $item => $details) : ?>
            <tr>
                <td><?php echo htmlspecialchars($item); ?></td>
                <td><?php echo htmlspecialchars($details['quantity']); ?></td>
                <td><?php echo htmlspecialchars($details['price']); ?></td>
                <td><?php echo htmlspecialchars($details['quantity'] * $details['price']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p><strong>Total Inventory Value: </strong><?php echo $totalValue; ?></p>

    <h2>Add New Item</h2>
    <form method="POST">
        <input type="hidden" name="action" value="add">
        <label for="newItem">Item Name:</label>
        <input type="text" id="newItem" name="newItem" required><br>
        <label for="newQuantity">Quantity:</label>
        <input type="number" id="newQuantity" name="newQuantity" required><br>
        <label for="newPrice">Price:</label>
        <input type="number" id="newPrice" name="newPrice" step="0.01" required><br>
        <button type="submit">Add Item</button>
    </form>

    <h2>Update Item Quantity</h2>
    <form method="POST">
        <input type="hidden" name="action" value="update">
        <label for="updateItem">Item Name:</label>
        <input type="text" id="updateItem" name="updateItem" required><br>
        <label for="updateQuantity">New Quantity:</label>
        <input type="number" id="updateQuantity" name="updateQuantity" required><br>
        <button type="submit">Update Quantity</button>
    </form>

    <h2>Remove Item</h2>
    <form method="POST">
        <input type="hidden" name="action" value="remove">
        <label for="removeItem">Item Name:</label>
        <input type="text" id="removeItem" name="removeItem" required><br>
        <button type="submit">Remove Item</button>
    </form>
</body>
</html>

