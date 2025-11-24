<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Item</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial Black', Arial, sans-serif;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 650px;
            margin: 50px auto;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            border-top: 5px solid #E31837;
        }
        h2 {
            text-align: center;
            color: #E31837;
            margin-bottom: 35px;
            font-size: 2.2em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #E31837;
            font-size: 1.1em;
        }
        input[type="number"] {
            padding: 15px;
            font-size: 1.1em;
            border: 2px solid #ddd;
            border-radius: 8px;
            transition: border 0.3s ease;
        }
        input[type="number"]:focus {
            border-color: #E31837;
            outline: none;
        }
        button {
            background: linear-gradient(135deg, #E31837 0%, #C41230 100%);
            color: white;
            padding: 15px;
            font-size: 1.2em;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(227, 24, 55, 0.3);
        }
        button:hover {
            background: linear-gradient(135deg, #006491 0%, #004D73 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 100, 145, 0.4);
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    <?php include("db.php");
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM menu_items WHERE id=$id");
    $item = mysqli_fetch_assoc($result);
    ?>
    
    <div class="container">
        <h2>Order: <?php echo $item['item_name']; ?></h2>
        
        <form method="POST" action="payment.php">
            <input type="hidden" name="item_name" value="<?php echo $item['item_name']; ?>">
            <input type="hidden" name="price" value="<?php echo $item['price']; ?>">
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            
            <button type="submit">Continue to Payment</button>
        </form>
    </div>
</body>
</html>
