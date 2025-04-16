document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const cake = document.getElementById('cake').value;
    const quantity = parseInt(document.getElementById('quantity').value, 10);

    if (!name || !email || !cake || quantity < 1) {
        displayMessage('Please fill in all fields correctly.', 'red');
        return;
    }

    // Simple email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
        displayMessage('Please enter a valid email address.', 'red');
        return;
    }

    // If all validations pass, submit the form normally
    this.submit();
});

function displayMessage(message, color) {
    const messageDiv = document.getElementById('orderMessage');
    messageDiv.textContent = message;
    messageDiv.style.color = color;
}
