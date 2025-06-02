<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "games");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST values
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$participants = $_POST['participants'];


?>
<div class="success-message">Booking submitted successfully!</div>';

<style>
    .success-message {
    max-width: 500px;
    margin: 20px auto;
    padding: 15px 20px;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 8px;
    font-size: 1rem;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.6s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
<script>
    setTimeout(() => {
        const msg = document.querySelector('.success-message');
        if (msg) msg.style.display = 'none';
    }, 4000); // hides after 4 seconds
</script>
