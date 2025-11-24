<!<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
    <style>E html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Menu</title>
    <link rel="stylesheet" href="navbar.css">
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
        
        /* Top Bar with Logo and Back Button */
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
        
        .back-button {
            background: white;
            color: #FF6B35;
            padding: 12px 30px;
            text-decoration: none;
            font-size: 1em;
            font-weight: 600;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: 2px solid #FF6B35;
        }
        
        .back-button:hover {
            background: #FF6B35;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
        }
        
        .container {
            max-width: 1600px;
            margin: 30px auto;
            padding: 30px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }
        
        .menu-section {
            flex: 2;
        }
        
        .cart-section {
            flex: 1;
            position: sticky;
            top: 120px;
        }
        
        h2 {
            color: #2C2C2C;
            font-size: 2.5em;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .subtitle {
            color: #888;
            font-size: 1.1em;
            margin-bottom: 30px;
        }
        
        .menu-table-container {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            overflow-x: auto;
        }
        
        .menu-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .menu-table thead {
            background: linear-gradient(135deg, #FF6B35 0%, #FF8C42 100%);
            color: white;
        }
        
        .menu-table th {
            padding: 18px;
            text-align: left;
            font-weight: 600;
            font-size: 1.1em;
            border-bottom: 3px solid #FF8C42;
        }
        
        .menu-table th:last-child,
        .menu-table td:last-child {
            text-align: center;
        }
        
        .menu-row {
            border-bottom: 1px solid #F0F0F0;
            transition: all 0.3s ease;
        }
        
        .menu-row:hover {
            background: #FFF9F7;
            transform: scale(1.01);
        }
        
        .menu-table td {
            padding: 20px 18px;
            vertical-align: middle;
        }
        
        .food-image {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .item-name {
            font-size: 1.2em;
            font-weight: 600;
            color: #2C2C2C;
        }
        
        .item-price {
            font-size: 1.3em;
            font-weight: bold;
            color: #FF6B35;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
        }
        
        .qty-btn {
            width: 35px;
            height: 35px;
            border: 2px solid #FF6B35;
            background: white;
            color: #FF6B35;
            border-radius: 50%;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .qty-btn:hover {
            background: #FF6B35;
            color: white;
            transform: scale(1.1);
        }
        
        .qty-input {
            width: 50px;
            height: 35px;
            text-align: center;
            border: 2px solid #E0E0E0;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            background: #FAFAFA;
        }
        
        .item-checkbox {
            width: 22px;
            height: 22px;
            cursor: pointer;
            accent-color: #FF6B35;
        }
        
        /* Cart Summary */
        .cart-summary {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: 2px solid #FF6B35;
            min-height: 400px;
        }
        
        .summary-content h3 {
            color: #2C2C2C;
            font-size: 1.6em;
            margin-bottom: 20px;
            border-bottom: 2px solid #FF6B35;
            padding-bottom: 10px;
            text-align: center;
        }
        
        .cart-header {
            background: linear-gradient(135deg, #FF6B35 0%, #FF8C42 100%);
            color: white;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .cart-header h3 {
            margin: 0;
            font-size: 1.5em;
            border: none;
            color: white;
        }
        
        .cart-icon {
            font-size: 2em;
            margin-bottom: 5px;
        }
        
        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 12px;
            margin: 8px 0;
            background: #FFF9F7;
            border-radius: 8px;
            border-left: 4px solid #FF6B35;
        }
        
        .cart-item span:first-child {
            color: #2C2C2C;
            font-weight: 500;
        }
        
        .cart-item span:last-child {
            color: #FF6B35;
            font-weight: bold;
        }
        
        .empty-cart {
            text-align: center;
            color: #888;
            padding: 20px;
            font-style: italic;
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
            font-size: 1.4em;
            font-weight: 600;
            color: #2C2C2C;
        }
        
        .total-amount {
            font-size: 1.8em;
            font-weight: bold;
            color: #FF6B35;
        }
        
        .checkout-button {
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
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .checkout-button:hover:not(:disabled) {
            background: linear-gradient(135deg, #FF8C42 0%, #FFA057 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.4);
        }
        
        .checkout-button:disabled {
            background: #CCC;
            cursor: not-allowed;
            box-shadow: none;
        }
        
        @media (max-width: 1200px) {
            .container {
                flex-direction: column;
            }
            
            .cart-section {
                position: relative;
                top: 0;
                width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .top-bar {
                flex-direction: column;
                gap: 15px;
            }
            
            .container {
                padding: 20px;
            }
            
            .menu-table {
                font-size: 0.9em;
            }
            
            .food-image {
                width: 60px;
                height: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar with Logo and Back Button -->
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo">🍔</div>
            <div class="company-name">Café<span>Delight</span></div>
        </div>
        <a href="landing.php" class="back-button">← Back to Home</a>
    </div>
    
    <?php include('navbar.php'); ?>
    <?php include('db.php'); ?>
    
    <form method="POST" action="payment.php" id="orderForm">
        <div class="container">
            <!-- Left Side: Menu -->
            <div class="menu-section">
                <h2>Our Menu</h2>
                <p class="subtitle">Browse and select your favorite items</p>
                
                <div class="menu-table-container">
                    <table class="menu-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Real food images array
                        $food_images = [
                            'pizza' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=150&h=150&fit=crop',
                            'coffee' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=150&h=150&fit=crop',
                            'tea' => 'https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9?w=150&h=150&fit=crop',
                            'burger' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=150&h=150&fit=crop',
                            'sandwich' => 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=150&h=150&fit=crop',
                            'pasta' => 'https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=150&h=150&fit=crop',
                            'samosa' => 'https://images.unsplash.com/photo-1601050690597-df0568f70950?w=150&h=150&fit=crop',
                            'chowmein' => 'https://images.unsplash.com/photo-1585032226651-759b368d7246?w=150&h=150&fit=crop',
                            'momos' => 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?w=150&h=150&fit=crop',
                            'default' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=150&h=150&fit=crop'
                        ];
                        
                        $result = mysqli_query($conn, "SELECT * FROM menu_items");
                        $item_index = 0;
                        while($row = mysqli_fetch_assoc($result)) {
                            // Try to match image based on item name
                            $item_lower = strtolower($row['item_name']);
                            $image_url = $food_images['default'];
                            foreach($food_images as $key => $url) {
                                if(strpos($item_lower, $key) !== false) {
                                    $image_url = $url;
                                    break;
                                }
                            }
                            
                            echo "<tr class='menu-row'>";
                            echo "<td><img src='".$image_url."' alt='".$row['item_name']."' class='food-image'></td>";
                            echo "<td class='item-name'>".$row['item_name']."</td>";
                            echo "<td class='item-price'>₹".$row['price']."</td>";
                            echo "<td>";
                            echo "<div class='quantity-control'>";
                            echo "<button type='button' class='qty-btn minus' onclick='decreaseQty(".$item_index.")'>-</button>";
                            echo "<input type='number' id='qty_".$item_index."' name='quantity[".$row['id']."]' value='0' min='0' max='99' class='qty-input' readonly>";
                            echo "<button type='button' class='qty-btn plus' onclick='increaseQty(".$item_index.")'>+</button>";
                            echo "</div>";
                            echo "</td>";
                            echo "<td>";
                            echo "<input type='checkbox' class='item-checkbox' id='check_".$item_index."' name='items[]' value='".$row['id']."' data-name='".$row['item_name']."' data-price='".$row['price']."' data-index='".$item_index."'>";
                            echo "<input type='hidden' name='item_name[".$row['id']."]' value='".$row['item_name']."'>";
                            echo "<input type='hidden' name='price[".$row['id']."]' value='".$row['price']."'>";
                            echo "</td>";
                            echo "</tr>";
                            $item_index++;
                        }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
            
            <!-- Right Side: Cart Summary -->
            <div class="cart-section">
                <div class="cart-summary">
                    <div class="cart-header">
                        <div class="cart-icon">🛒</div>
                        <h3>Your Cart</h3>
                    </div>
                    
                    <div class="summary-content">
                        <div id="selected-items">
                            <p class="empty-cart">No items selected</p>
                        </div>
                        <div class="total-section">
                            <span class="total-label">Total:</span>
                            <span class="total-amount" id="totalAmount">₹0</span>
                        </div>
                    </div>
                    <button type="submit" class="checkout-button" id="checkoutBtn" disabled>Checkout</button>
                </div>
            </div>
        </div>
    </form>
    
    <script>
        function increaseQty(index) {
            const qtyInput = document.getElementById('qty_' + index);
            const checkbox = document.getElementById('check_' + index);
            let currentQty = parseInt(qtyInput.value);
            if(currentQty < 99) {
                qtyInput.value = currentQty + 1;
                if(currentQty === 0) {
                    checkbox.checked = true;
                }
                updateCart();
            }
        }
        
        function decreaseQty(index) {
            const qtyInput = document.getElementById('qty_' + index);
            const checkbox = document.getElementById('check_' + index);
            let currentQty = parseInt(qtyInput.value);
            if(currentQty > 0) {
                qtyInput.value = currentQty - 1;
                if(currentQty === 1) {
                    checkbox.checked = false;
                }
                updateCart();
            }
        }
        
        // Update cart when checkbox is clicked
        document.querySelectorAll('.item-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const index = this.dataset.index;
                const qtyInput = document.getElementById('qty_' + index);
                if(this.checked && qtyInput.value === '0') {
                    qtyInput.value = '1';
                } else if(!this.checked) {
                    qtyInput.value = '0';
                }
                updateCart();
            });
        });
        
        function updateCart() {
            let total = 0;
            let itemsHtml = '';
            let itemCount = 0;
            
            document.querySelectorAll('.item-checkbox').forEach(checkbox => {
                const index = checkbox.dataset.index;
                const qtyInput = document.getElementById('qty_' + index);
                const qty = parseInt(qtyInput.value);
                
                if(qty > 0) {
                    checkbox.checked = true;
                    const name = checkbox.dataset.name;
                    const price = parseFloat(checkbox.dataset.price);
                    const itemTotal = price * qty;
                    total += itemTotal;
                    itemCount++;
                    
                    itemsHtml += `<div class="cart-item">
                        <span>${name} x ${qty}</span>
                        <span>₹${itemTotal}</span>
                    </div>`;
                } else {
                    checkbox.checked = false;
                }
            });
            
            const selectedItemsDiv = document.getElementById('selected-items');
            if(itemCount > 0) {
                selectedItemsDiv.innerHTML = itemsHtml;
                document.getElementById('checkoutBtn').disabled = false;
            } else {
                selectedItemsDiv.innerHTML = '<p class="empty-cart">No items selected</p>';
                document.getElementById('checkoutBtn').disabled = true;
            }
            
            document.getElementById('totalAmount').textContent = '₹' + total.toFixed(2);
        }
        
        // Prevent form submission if no items selected
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            let hasItems = false;
            document.querySelectorAll('.item-checkbox:checked').forEach(checkbox => {
                const index = checkbox.dataset.index;
                const qty = parseInt(document.getElementById('qty_' + index).value);
                if(qty > 0) hasItems = true;
            });
            
            if(!hasItems) {
                e.preventDefault();
                alert('Please select at least one item with quantity greater than 0');
            }
        });
    </script>
</body>
</html>
