<form id="bookingForm" action="submit_booking.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="date">Preferred Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="participants">Number of Participants:</label>
    <input type="number" id="participants" name="participants" min="1" required>

    <button type="submit">Submit</button>
</form>
<style>
    form {
    max-width: 400px;
    margin: auto;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
}

form label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

form input, form button {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

form button {
    background-color: #007bff;
    color: white;
    border: none;
    margin-top: 15px;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}
</style>