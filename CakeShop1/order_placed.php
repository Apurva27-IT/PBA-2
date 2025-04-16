<?php
session_start();

$name = $_SESSION['name'] ?? null;
$cake = $_SESSION['cake'] ?? null;
$quantity = $_SESSION['quantity'] ?? null;

// Clear session data after reading
unset($_SESSION['name'], $_SESSION['cake'], $_SESSION['quantity']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order Confirmation - Cake Shop</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1>Thank you for your order!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Back to Home</a></li>
            </ul>
        </nav>
    </header>

    <section id="confirmation">
        <h2>Order Confirmation</h2>
        <?php if ($name && $cake && $quantity): ?>
            <p>Hi <?php echo htmlspecialchars($name); ?>, your order for <?php echo htmlspecialchars($quantity); ?> <?php echo htmlspecialchars($cake); ?><?php echo $quantity > 1 ? 's' : ''; ?> has been received. We will contact you shortly!</p>
        <?php else: ?>
            <p>No order details found.</p>
        <?php endif; ?>
    </section>
</body>
</html>
