<nav class="navbar">
    <ul>
        <li><a href="landing.php" <?php if(basename($_SERVER['PHP_SELF']) == 'landing.php') echo 'class="active"'; ?>>Home</a></li>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Menu</a></li>
        <li><a href="revenue.php" <?php if(basename($_SERVER['PHP_SELF']) == 'revenue.php') echo 'class="active"'; ?>>Revenue</a></li>
    </ul>
</nav>
