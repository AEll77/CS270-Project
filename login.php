<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="loginstyle.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <?php include('includes/header.php'); ?>
    <body>
        <div class="banner">
        <?php include('includes/menubar.php'); ?>
        </div>
            <div class="maintitle">
                <h1>Tony's Pizzeria</h1>
                <p>Welcome to the official Tony's website! <br> All ingredients are expertly hand selected and prepared to absolute perfection for you to enjoy!</p>
            </div>
        <div class="inner-container">
            <h1>
                Login
            </h1>
            <hr/>
            <form action="login_script.php" method="POST">
                <div class="formcontainer">
                    <label for="username" name="username"><strong>Username</strong></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <label for="password" name="password"><strong>Password</strong></label>
                    <input type="text" placeholder="Enter Password" name="password" required>
                </div>
                <div class="formbutton">
                    <button type="submit">Login</button>
                </div>
                <div class="lowform">
                    <label style="padding-left: 15px">
                        <input type="checkbox" checked="checked" name="remember"> Remember Me
                    </label>
                    <span class="new"><a href="Register.php"> Dont have an account?</a></span>
                </div>
            </form>
            <p><br></p>
            <hr/>
            <div class="skills">
                <span>Authentic</span>
                <span>Italian</span>
                <span>Perfection</span>
            </div>   
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="about.php">about us</a></li>
                            <li><a href="about.php">services</a></li>
                            <li><a href="about.php">privacy policy</a></li>
                            <li><a href="about.php">student programs</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>contact us</h4>
                        <ul>
                            <li><a href="contact.php">online support</a></li>
                            <li><a href="contact.php">order support</a></li>
                            <li><a href="contact.php">refund policy</a></li>
                            <li><a href="contact.php">payment information</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online restaurant</h4>
                        <ul>
                            <li><a href="menu.php">pizzas</a></li>
                            <li><a href="menu.php">sides</a></li>
                            <li><a href="menu.php">specialties</a></li>
                            <li><a href="menu.php">beverages</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="socials">
                            <a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                            <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                            <a href="www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>