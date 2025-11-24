<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('navbar.php'); ?>
    <?php
    include("db.php");

    // Generate 4-digit confirmation number
    $confirmationNumber = rand(1000, 9999);
    $orderDate = date("F j, Y");
    $orderTime = date("g:i A");

    $order_details = json_decode($_POST['order_details'], true);
    $total = $_POST['total'];

    // Insert each item as a separate order
    foreach($order_details as $detail) {
        $item = $detail['name'];
        $qty = $detail['qty'];
        $item_total = $detail['total'];
        
        $sql = "INSERT INTO orders (item_name, quantity, total_amount, payment_status)
                VALUES ('$item', '$qty', '$item_total', 'Paid')";
        mysqli_query($conn, $sql);
    }
    ?>
    
    <div class="container">
        <div class="success-icon">✓</div>
        <h2>Order Confirmed!</h2>
        <p><strong>Confirmation Number: #<?php echo $confirmationNumber; ?></strong></p>
        <p>Date: <?php echo $orderDate; ?> at <?php echo $orderTime; ?></p>
        <p>Thank you for your purchase.</p>
        <p>Your order has been successfully placed.</p>
        <a href="index.php" class="btn">Back to Menu</a>
    </div>
</body>
</html>
