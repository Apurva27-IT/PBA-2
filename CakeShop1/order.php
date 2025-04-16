<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $cake = $_POST["cake"] ?? '';
    $quantity = intval($_POST["quantity"]);

    if (empty($name) || empty($email) || empty($cake) || $quantity < 1) {
        echo "Please fill in all fields correctly.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Store order details in session
    $_SESSION['name'] = $name;
    $_SESSION['cake'] = $cake;
    $_SESSION['quantity'] = $quantity;

    // Redirect to order_placed.php
    header("Location: order_placed.php");
    exit;
} else {
    echo "Invalid request method.";
}
?>
