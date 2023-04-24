<!DOCTYPE html>
<div class="navbar">
    <img src="logo.png" class="logo" href="Home.html">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="hours.php">Hours</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="reservation.php">Reservations</a></li>
        
        <?php if ($loggedIn) { ?>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <?php } ?>
    </ul>
</div>
