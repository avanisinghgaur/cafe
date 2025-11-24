<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenue Report</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Top Bar with Logo and Menu Button -->
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo">🍔</div>
            <div class="company-name">Café<span>Delight</span></div>
        </div>
        <a href="index.php" class="menu-button">View Menu</a>
    </div>

    <?php include('navbar.php'); ?>
    <?php include("db.php"); ?>
    
    <?php
    // Fetch all orders
    $orders_result = mysqli_query($conn, "SELECT * FROM orders");
    
    // Calculate summary statistics
    $total_revenue = mysqli_query($conn, "SELECT SUM(total_amount) AS revenue FROM orders");
    $revenue_data = mysqli_fetch_assoc($total_revenue);
    $total_revenue_amount = $revenue_data['revenue'] ? $revenue_data['revenue'] : 0;
    
    $total_orders = mysqli_query($conn, "SELECT COUNT(*) AS count FROM orders");
    $orders_count = mysqli_fetch_assoc($total_orders);
    $total_orders_count = $orders_count['count'];
    
    $paid_orders = mysqli_query($conn, "SELECT COUNT(*) AS count FROM orders WHERE payment_status = 'Paid'");
    $paid_count = mysqli_fetch_assoc($paid_orders);
    $total_paid = $paid_count['count'];
    
    $pending_orders = mysqli_query($conn, "SELECT COUNT(*) AS count FROM orders WHERE payment_status = 'Pending'");
    $pending_count = mysqli_fetch_assoc($pending_orders);
    $total_pending = $pending_count['count'];
    ?>
    
    <div class="revenue-main-container">
        <!-- Left Side: Orders Table -->
        <div class="orders-section">
            <h2>Order Details</h2>
            <p class="subtitle">Complete list of all orders</p>
            
            <div class="orders-table-container">
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($orders_result) > 0) {
                            $order_number = 1;
                            while ($order = mysqli_fetch_assoc($orders_result)) {
                                $status_class = ($order['payment_status'] == 'Paid') ? 'status-paid' : 'status-pending';
                                echo "<tr>";
                                echo "<td>#" . $order_number . "</td>";
                                echo "<td>" . htmlspecialchars($order['item_name']) . "</td>";
                                echo "<td>" . htmlspecialchars($order['quantity']) . "</td>";
                                echo "<td>₹" . number_format($order['total_amount'], 2) . "</td>";
                                echo "<td><span class='status-badge " . $status_class . "'>" . htmlspecialchars($order['payment_status']) . "</span></td>";
                                echo "</tr>";
                                $order_number++;
                            }
                        } else {
                            echo "<tr><td colspan='5' style='text-align: center; padding: 40px;'>No orders found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Right Side: Summary Sidebar -->
        <div class="summary-sidebar">
            <h3>Revenue Summary</h3>
            
            <div class="summary-card total-revenue">
                <div class="summary-icon">💰</div>
                <div class="summary-info">
                    <div class="summary-label">Total Revenue</div>
                    <div class="summary-value">₹<?php echo number_format($total_revenue_amount, 2); ?></div>
                </div>
            </div>
            
            <div class="summary-card">
                <div class="summary-icon">📦</div>
                <div class="summary-info">
                    <div class="summary-label">Total Orders</div>
                    <div class="summary-value"><?php echo $total_orders_count; ?></div>
                </div>
            </div>
            
            <div class="summary-card">
                <div class="summary-icon">✅</div>
                <div class="summary-info">
                    <div class="summary-label">Paid Orders</div>
                    <div class="summary-value"><?php echo $total_paid; ?></div>
                </div>
            </div>
            
            <div class="summary-card">
                <div class="summary-icon">⏳</div>
                <div class="summary-info">
                    <div class="summary-label">Pending Orders</div>
                    <div class="summary-value"><?php echo $total_pending; ?></div>
                </div>
            </div>
            
            <div class="summary-actions">
                <a href="index.php" class="action-btn">Take New Order</a>
            </div>
        </div>
    </div>
</body>
</html>
