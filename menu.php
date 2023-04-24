<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="menustyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Menu</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<?php include('includes/header.php'); ?>
    <body>
        <div class="banner">
        <?php include('includes/menubar.php'); ?>
        <div class="maintitle">
            <h1>Tony's Pizzeria</h1>
            <p>Welcome to the official Tony's website! <br> All ingredients are expertly hand selected and prepared to absolute perfection for you to enjoy!</p>
            <p><br></p>
            <h2>Size Sheet</h2>
            <p>Large: 14"<br>Medium: 12"<br>Small: 10"</p>
            <p>All pizzas are priced proportionally based on the large size.</p>
        </div>
    </div>
    <div class="containermenu">
    <div class="menu">
      <h2 class="menu-group-heading">
        PIZZAS
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="classic.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name"><a href="#">Classic</a></span>
              <span class="menu-item-price">$14.99</span>
            </h3>
            <p class="menu-item-description">
              Hand crafted and seasoned authentic italian dough topped with fresh tomato sauce, mozzarella, pepperoni, sausage, canadian bacon and parmesan.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="pepperoni.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Pepperoni</a></span>
              <span class="menu-item-price">$12.99</span>
            </h3>
            <p class="menu-item-description">
              Hand crafted and seasoned authentic italian dough topped with fresh tomato sauce, mozzarella, pepperoni, and parmesan.
            </p>
          </div>
        </div>
        <div class="menu-item">
            <img class="menu-item-image" src="sausage.jpg" alt="Bruschetta">
            <div class="menu-item-text">
              <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Sausage</a></span>
                <span class="menu-item-price">$13.20</span>
              </h3>
              <p class="menu-item-description">
                Hand crafted and seasoned authentic italian dough topped with fresh tomato sauce, mozzarella, sausage, and parmesan.
              </p>
            </div>
          </div>
      </div>
      <h2 class="menu-group-heading">
        SIDES
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="knots.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name"><a href="#">Garlic Knots</a></span>
              <span class="menu-item-price">$7.99</span>
            </h3>
            <p class="menu-item-description">
              Hand crafted and molded seasoned dough basted in garlic butter and italian seasoning cooked to perfection.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="sticks.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Mozzarella Sticks</a></span>
              <span class="menu-item-price">$8.99</span>
            </h3>
            <p class="menu-item-description">
              Fresh locally made mozzarella battered in flour and wheat based ingredients with our signature italian seasoning. Comes with fresh marinera sauce.
            </p>
          </div>
        </div>
        <div class="menu-item">
            <img class="menu-item-image" src="bread.jpg" alt="Bruschetta">
            <div class="menu-item-text">
              <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Breadsticks</a></span>
                <span class="menu-item-price">$6.99</span>
              </h3>
              <p class="menu-item-description">
                Crispy on the outside and soft on the inside. Seaoned with garlick, parmesan, and our signature garlic butter.
              </p>
            </div>
          </div>
      </div>
      <h2 class="menu-group-heading">
        SPECIALTIES
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="wings.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Boneless Wings</a></span>
              <span class="menu-item-price">$13.99</span>
            </h3>
            <p class="menu-item-description">
              10x Boneless wings with you choice of sauces. We currently have: Reaper, Sahara Dry Rub, Hot, Mild, Butter Bufallo, Asian Spice, Spicy, Chile, and Garlic Parmesan.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="calzone.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Calzone</a></span>
              <span class="menu-item-price">$10.20</span>
            </h3>
            <p class="menu-item-description">
              One giant calzone with the best fresh ingredients. Perfectly cripsy on the outside, soft and tasty on the inside. Made with our signature pizza dough, mozzarella, pepperoni, tomato sauce, and sausage.
            </p>
          </div>
        </div>
        <div class="menu-item">
            <img class="menu-item-image" src="carbonara.jpg" alt="Bruschetta">
            <div class="menu-item-text">
              <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Carbonara</a></span>
                <span class="menu-item-price">$16.99</span>
              </h3>
              <p class="menu-item-description">
                Fresh made and cut noodles, made to authentic italian standards. Comes with breadsticks, and fresh pancetta.
              </p>
            </div>
          </div>
      </div>
      <h2 class="menu-group-heading">
        BEVERAGES
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="fount.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Fountain</a></span>
              <span class="menu-item-price">$2.00</span>
            </h3>
            <p class="menu-item-description">
              20 oz cup with unlimited refils at our coke sponsered fountain.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="shake.jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Milk Shake</a></span>
              <span class="menu-item-price">$4.00</span>
            </h3>
            <p class="menu-item-description">
              Milk shake made from local products only. You can choose any from the following flavors: vanilla, mint, chocolate, peanut butter, and snickers. Comes with whipped cream and a cherry on top.
            </p>
          </div>
        </div>
        <div class="menu-item">
            <img class="menu-item-image" src="tea.jpg" alt="Bruschetta">
            <div class="menu-item-text">
              <h3 class="menu-item-heading">
                <span class="menu-item-name"><a href="#">Iced Tea</a></span>
                <span class="menu-item-price">$3.00</span>
              </h3>
              <p class="menu-item-description">
                Sweetened or unsweeted iced tea with a variety of flavors. We have: cherry, peach, strawberry, mint, orange, lemon, and grape.
              </p>
            </div>
          </div>
      </div>
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