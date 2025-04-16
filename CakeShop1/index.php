<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cake Shop</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1>Welcome to the Cake Shop</h1>
        <nav>
            <ul>
                <li><a href="#cakes">Our Cakes</a></li>
                <li><a href="#order">Order Now</a></li>
            </ul>
        </nav>
    </header>

    <section id="cakes">
        <h2>Our Cakes</h2>
        <div class="cake-list">
            <div class="cake-item">
                <img src="images/chocolate_cake.jpg" alt="Chocolate Cake" />
                <h3>Chocolate Cake</h3>
                <p>Rich and creamy chocolate cake.</p>
                <p class="price">$20</p>
            </div>
            <div class="cake-item">
                <img src="images/vanilla_cake.jpg" alt="Vanilla Cake" />
                <h3>Vanilla Cake</h3>
                <p>Classic vanilla flavor with buttercream frosting.</p>
                <p class="price">$18</p>
            </div>
            <div class="cake-item">
                <img src="images/red_velvet_cake.jpg" alt="Red Velvet Cake" />
                <h3>Red Velvet Cake</h3>
                <p>Delicious red velvet with cream cheese frosting.</p>
                <p class="price">$22</p>
            </div>
        </div>
    </section>

    <section id="order">
        <h2>Order Your Cake</h2>
        <form id="orderForm" action="order.php" method="POST" novalidate>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label>Select Cake:</label>
            <div id="cakeOptions" class="cake-options" required>
                <label>
                    <input type="radio" name="cake" value="Chocolate Cake" required />
                    <img src="images/chocolate_cake.jpg" alt="Chocolate Cake" class="cake-radio-img" />
                    Chocolate Cake
                </label>
                <label>
                    <input type="radio" name="cake" value="Vanilla Cake" />
                    <img src="images/vanilla_cake.jpg" alt="Vanilla Cake" class="cake-radio-img" />
                    Vanilla Cake
                </label>
                <label>
                    <input type="radio" name="cake" value="Red Velvet Cake" />
                    <img src="images/red_velvet_cake.jpg" alt="Red Velvet Cake" class="cake-radio-img" />
                    Red Velvet Cake
                </label>
            </div>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" required />

            <button type="submit">Place Order</button>
            <div id="orderMessage"></div>
        </form>
    </section>

    <script src="script.js"></script>
</body>
</html>
