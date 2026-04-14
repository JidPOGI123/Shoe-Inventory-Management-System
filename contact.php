<?php
session_start();

// 🔒 PROTECT PAGE
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Arial;
}

body {
  display: flex;
  min-height: 100vh;
  background: linear-gradient(135deg, #0f172a, #1e293b, #0ea5e9);
  color: white;
}

/* SIDEBAR GLASS */
.sidebar {
  width: 240px;
  padding: 20px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);

  border-right: 1px solid rgba(255,255,255,0.15);
}

.sidebar h2 {
  text-align: center;
  color: #38bdf8;
  margin-bottom: 20px;
}

.sidebar ul {
  list-style: none;
}

.sidebar ul li {
  margin: 12px 0;
}

.sidebar ul li a {
  display: block;
  padding: 10px;
  border-radius: 8px;
  color: #e2e8f0;
  text-decoration: none;
  transition: 0.2s;
}

.sidebar ul li a:hover {
  background: rgba(255,255,255,0.15);
  transform: translateX(5px);
}

.logout {
  color: #f87171 !important;
}

/* MAIN */
.main {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

/* CONTAINER */
.container {
  display: flex;
  gap: 25px;
}

/* GLASS CARD */
.card {
  width: 320px;
  padding: 25px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);

  border: 1px solid rgba(255,255,255,0.15);
  border-radius: 12px;

  box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

/* TITLE */
h2 {
  text-align: center;
  margin-bottom: 15px;
  color: #38bdf8;
}

/* INPUT */
input, textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 10px;

  border: none;
  border-radius: 10px;
  outline: none;

  background: rgba(255,255,255,0.12);
  color: white;
  transition: 0.2s;
}

input:focus, textarea:focus {
  background: rgba(255,255,255,0.2);
}

/* BUTTON */
button {
  width: 100%;
  padding: 12px;

  border: none;
  border-radius: 10px;

  background: #38bdf8;
  color: black;
  font-weight: bold;

  cursor: pointer;
  transition: 0.2s;
}

button:hover {
  background: #22c55e;
  transform: scale(1.03);
}

/* INFO TEXT */
.info p {
  margin: 10px 0;
  color: #cbd5e1;
}

.info strong {
  color: #38bdf8;
}

/* SMALL NOTE */
.note {
  text-align: center;
  margin-top: 10px;
  font-size: 12px;
  color: #94a3b8;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2>MENU</h2>

  <ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="developer.php">Developer</a></li>
    <li><a class="logout" href="index.php">Logout</a></li>
  </ul>
</div>

<!-- MAIN -->
<div class="main">

<div class="container">

    <!-- INFO CARD -->
    <div class="card info">
        <h2>Contact Info</h2>

        <p><strong>📞 Phone:</strong> +63 912 345 6789</p>
        <p><strong>📧 Email:</strong> shoeinventory@email.com</p>
        <p><strong>📍 Location:</strong> San Pablo City, Laguna</p>
    </div>

    <!-- FORM CARD -->
    <div class="card">
        <h2>Send Message</h2>

        <form method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>

        <div class="note">
            Demo only (no database yet)
        </div>
    </div>

</div>

</div>

</body>
</html>
