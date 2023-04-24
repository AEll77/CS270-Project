<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="contactstyle.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <?php include('includes/header.php'); ?>
    <body>
        <div class="banner">
        <?php include('includes/menubar.php'); ?>
        </div>
        <div class="containerform">
            <form onsubmit="sendEmail(); reset(); return false;">
                <h3>CONTACT US</h3>
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Your Email" required>
                <input type="text" id="phone" placeholder="Phone Number" required>
                <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail() {
                Email.send({
                    Host : "smtp.gmail.com",
                    Username : "username",
                    Password : "password",
                    To : 'username',
                    From : document.getElementbById("email").value,
                    Subject : "New Contact Form Inquiry",
                    Body : "Name: " + document.getElementById("name").value + "<br> Email: " + document.getElementById("email").value + "<br> Phone: " + document.getElementById("phone").value + "<br> Message: " + document.getElementById("message").value
                }).then(
                message => alert("Message Sent Successfully")
                );
            }
        </script>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="About.html">about us</a></li>
                            <li><a href="About.html">services</a></li>
                            <li><a href="About.html">privacy policy</a></li>
                            <li><a href="About.html">student programs</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>contact us</h4>
                        <ul>
                            <li><a href="Contact.html">online support</a></li>
                            <li><a href="Contact.html">order support</a></li>
                            <li><a href="Contact.html">refund policy</a></li>
                            <li><a href="Contact.html">payment information</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online resteraunt</h4>
                        <ul>
                            <li><a href="Menu.html">pizzas</a></li>
                            <li><a href="Menu.html">sides</a></li>
                            <li><a href="Menu.html">specialties</a></li>
                            <li><a href="Menu.html">beverages</a></li>
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