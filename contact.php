<?php
// Optional: handle form submission later
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #121418;
    color: #fff;
    display: flex;
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    background: #1c1f26;
    height: 100vh;
    padding: 20px;
}

.sidebar h2 {
    color: #c1c7ff;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 12px 0;
}

.sidebar ul li a {
    display: block;
    padding: 10px 12px;
    color: #b3b8c2;
    text-decoration: none;
    border-radius: 6px;
}

.sidebar ul li a:hover {
    background: #2a2f3a;
    color: #fff;
}

/* MAIN (CENTER EVERYTHING) */
.main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* WRAPPER FOR CENTER ALIGN */
.container {
    display: flex;
    gap: 30px;
    align-items: center;
    justify-content: center;
}

/* CARD */
.card {
    background: #1c1f26;
    padding: 25px;
    border-radius: 10px;
    width: 320px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.5);
}

/* TITLE */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #c1c7ff;
}

/* INPUTS */
input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: none;
    border-radius: 5px;
    background: #2a2f3a;
    color: #fff;
    outline: none;
}

/* BUTTON */
button {
    width: 100%;
    padding: 10px;
    background: #3b82f6;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background: #2563eb;
}

/* INFO TEXT */
.info p {
    margin: 10px 0;
    color: #d1d5db;
}

.info strong {
    color: #3b82f6;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2>📦 Menu</h2>
  <ul>
    <li><a href="index.php">Dashboard</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="developer.php">Developer</a></li>
  </ul>
</div>

<!-- MAIN CONTENT -->
<div class="main">

<div class="container">

    <!-- CONTACT INFO -->
    <div class="card info">
        <h2>Contact Information</h2>

        <p><strong>📞 Phone:</strong> +63 912 345 6789</p>
        <p><strong>📧 Email:</strong> shoeinventory@email.com</p>
        <p><strong>📍 Location:</strong> San Pablo City, Laguna, Philippines</p>
    </div>

    <!-- CONTACT FORM -->
    <div class="card">
        <h2>Send Message</h2>

        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

</div>

</div>

</body>
</html>