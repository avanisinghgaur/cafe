<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #FAFAFA;
            color: #2C2C2C;
        }
        
        .top-bar {
            background: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #FF6B35 0%, #FF8C42 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
            color: white;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(255, 107, 53, 0.3);
        }
        
        .company-name {
            font-size: 1.8em;
            font-weight: bold;
            color: #2C2C2C;
        }
        
        .company-name span {
            color: #FF6B35;
        }
        
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 40px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border-top: 5px solid #FF6B35;
        }
        
        h2 {
            text-align: center;
            color: #2C2C2C;
            margin-bottom: 35px;
            font-size: 2.5em;
            font-weight: 700;
        }
        
        .order-summary {
            background: #FFF9F7;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            border: 2px solid #FFE5DC;
        }
        
        .order-summary h3 {
            color: #FF6B35;
            font-size: 1.5em;
            margin-bottom: 20px;
            border-bottom: 2px solid #FFE5DC;
            padding-bottom: 10px;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 12px;
            margin: 10px 0;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #FF6B35;
        }
        
        .order-item .item-details {
            flex: 1;
        }
        
        .order-item .item-name {
            font-weight: 600;
            color: #2C2C2C;
            font-size: 1.1em;
        }
        
        .order-item .item-qty {
            color: #888;
            font-size: 0.95em;
            margin-top: 5px;
        }
        
        .order-item .item-price {
            font-weight: bold;
            color: #FF6B35;
            font-size: 1.2em;
        }
        
        .total-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 3px solid #FF6B35;
        }
        
        .total-label {
            font-size: 1.5em;
            font-weight: 600;
            color: #2C2C2C;
        }
        
        .total-amount {
            font-size: 2em;
            font-weight: bold;
            color: #FF6B35;
        }
        
        button {
            width: 100%;
            background: linear-gradient(135deg, #FF6B35 0%, #FF8C42 100%);
            color: white;
            padding: 18px;
            font-size: 1.3em;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
        }
        
        button:hover {
            background: linear-gradient(135deg, #FF8C42 0%, #FFA057 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.4);
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo">🍔</div>
            <div class="company-name">Café<span>Delight</span></div>
        </div>
    </div>
    
    <?php include('navbar.php'); ?>
    <?php
    // Handle multiple items
    $items = isset($_POST['items']) ? $_POST['items'] : [];
    $quantities = isset($_POST['quantity']) ? $_POST['quantity'] : [];
    $item_names = isset($_POST['item_name']) ? $_POST['item_name'] : [];
    $prices = isset($_POST['price']) ? $_POST['price'] : [];
    
    $grand_total = 0;
    $order_details = [];
    
    foreach($items as $item_id) {
        if(isset($quantities[$item_id]) && $quantities[$item_id] > 0) {
            $qty = $quantities[$item_id];
            $name = $item_names[$item_id];
            $price = $prices[$item_id];
            $item_total = $price * $qty;
            $grand_total += $item_total;
            
            $order_details[] = [
                'name' => $name,
                'qty' => $qty,
                'price' => $price,
                'total' => $item_total
            ];
        }
    }
    ?>
    
    <div class="container">
        <h2>Payment Summary</h2>
        
        <div class="order-summary">
            <h3>Order Details</h3>
            <?php foreach($order_details as $detail): ?>
                <div class="order-item">
                    <div class="item-details">
                        <div class="item-name"><?php echo $detail['name']; ?></div>
                        <div class="item-qty">Quantity: <?php echo $detail['qty']; ?> × ₹<?php echo $detail['price']; ?></div>
                    </div>
                    <div class="item-price">₹<?php echo $detail['total']; ?></div>
                </div>
            <?php endforeach; ?>
            
            <div class="total-section">
                <span class="total-label">Total Amount:</span>
                <span class="total-amount">₹<?php echo $grand_total; ?></span>
            </div>
        </div>
        
        <form action="confirm.php" method="POST">
            <?php 
            // Store order details as JSON for confirm page
            $order_json = json_encode($order_details);
            ?>
            <input type="hidden" name="order_details" value='<?php echo htmlspecialchars($order_json); ?>'>
            <input type="hidden" name="total" value="<?php echo $grand_total; ?>">
            
            <button type="submit">Pay Now - ₹<?php echo $grand_total; ?></button>
        </form>
    </div>
</body>
</html>
