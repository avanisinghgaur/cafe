<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Café</title>
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
        
        /* Top Bar with Logo and Menu Button */
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
        
        .menu-button {
            background: linear-gradient(135deg, #FF6B35 0%, #FF8C42 100%);
            color: white;
            padding: 14px 35px;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: 600;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
            border: none;
            cursor: pointer;
        }
        
        .menu-button:hover {
            background: linear-gradient(135deg, #FF8C42 0%, #FFA057 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(255, 107, 53, 0.4);
        }
        
        /* Hero Banner Section */
        .hero-banner {
            background: linear-gradient(135deg, #FF6B35 0%, #FF8C42 100%);
            padding: 60px 40px;
            margin: 30px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            box-shadow: 0 8px 24px rgba(255, 107, 53, 0.25);
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            flex: 1;
            z-index: 2;
        }
        
        .hero-content h1 {
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 15px;
            line-height: 1.2;
        }
        
        .hero-content p {
            font-size: 1.4em;
            margin-bottom: 10px;
            opacity: 0.95;
        }
        
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            z-index: 2;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }
        
        /* Decorative triangles */
        .hero-banner::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            bottom: -50px;
            left: 50px;
            transform: rotate(25deg);
        }
        
        .hero-banner::after {
            content: '';
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            top: 30px;
            left: 100px;
            transform: rotate(-15deg);
        }
        
        footer {
            margin-top: 60px;
            padding: 30px;
            font-size: 0.95em;
            color: #666;
            background-color: white;
            text-align: center;
            border-top: 1px solid #E8E8E8;
        }
        
        /* Food Gallery Section */
        .gallery-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        
        .gallery-title {
            font-size: 2.5em;
            color: #E31837;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .food-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        
        .food-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            background: white;
            border: 1px solid #F0F0F0;
        }
        
        .food-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.2);
            border-color: #FF6B35;
        }
        
        .food-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }
        
        .food-label {
            padding: 18px;
            background: white;
            color: #2C2C2C;
            font-size: 1.15em;
            font-weight: 600;
            text-align: center;
        }
        
        /* Favorite icon */
        .food-item::before {
            content: '♡';
            position: absolute;
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3em;
            color: #FF6B35;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            z-index: 10;
        }
        
        @media (max-width: 768px) {
            .top-bar {
                flex-direction: column;
                gap: 20px;
                padding: 20px;
            }
            
            .hero-banner {
                flex-direction: column;
                text-align: center;
                padding: 40px 20px;
            }
            
            .hero-content h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar with Logo and View Menu Button -->
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo">🍔</div>
            <div class="company-name">Café<span>Delight</span></div>
        </div>
        <a href="index.php" class="menu-button">View Menu</a>
    </div>
    
    <?php include('navbar.php'); ?>
    
    <!-- Hero Banner -->
    <div class="hero-banner">
        <div class="hero-content">
            <h1>30% Off<br>Fitness Meal</h1>
            <p>Healthy & Delicious</p>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=500&h=300&fit=crop" alt="Delicious Food" style="max-width: 400px;">
        </div>
    </div>
    
    <!-- Food Gallery Section -->
    <section class="gallery-section">
        <h2 class="gallery-title">Our Delicious Menu</h2>
        <div class="food-gallery">
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400&h=300&fit=crop" alt="Pizza">
                <div class="food-label">Pizza</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&h=300&fit=crop" alt="Coffee">
                <div class="food-label">Coffee</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9?w=400&h=300&fit=crop" alt="Tea">
                <div class="food-label">Tea</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=300&fit=crop" alt="Burger">
                <div class="food-label">Burger</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=400&h=300&fit=crop" alt="Sandwich">
                <div class="food-label">Sandwich</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400&h=300&fit=crop" alt="Pasta">
                <div class="food-label">Pasta</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?w=400&h=300&fit=crop" alt="Samosa">
                <div class="food-label">Samosa</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?w=400&h=300&fit=crop" alt="Chowmein">
                <div class="food-label">Chowmein</div>
            </div>
            
            <div class="food-item">
                <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?w=400&h=300&fit=crop" alt="Momos">
                <div class="food-label">Momos</div>
            </div>
        </div>
    </section>
    
    <footer>
        &copy; <?php echo date("Y"); ?> Our Café. All rights reserved.
    </footer>
</body>
</html>
