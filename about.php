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
<title>About</title>

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
  margin-top: 10px;
}

/* MAIN */
.main {
  flex: 1;
  padding: 30px;
}

/* TITLE */
h1 {
  font-size: 28px;
  margin-bottom: 20px;
}

/* CARDS */
.card {
  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,0.15);

  padding: 20px;
  border-radius: 12px;
  margin-bottom: 15px;

  transition: 0.2s;
}

.card:hover {
  transform: scale(1.02);
}

h2 {
  color: #38bdf8;
  margin-bottom: 10px;
}

p, li {
  color: #cbd5e1;
  line-height: 1.6;
}

ul {
  padding-left: 20px;
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

<h1>📘 About the Project</h1>

<div class="card">
    <h2>Project Title</h2>
    <p><strong>👟 Shoe Inventory Management System</strong></p>
</div>

<div class="card">
    <h2>Purpose of the System</h2>
    <p>
        This system is designed to manage product inventory efficiently using CRUD operations.
        It allows users to add, view, update, and delete products through a modern web interface.
    </p>
</div>

<div class="card">
    <h2>System Features</h2>
    <ul>
        <li>Create product records</li>
        <li>Read product data</li>
        <li>Update product information</li>
        <li>Delete products</li>
        <li>Modern dashboard UI</li>
    </ul>
</div>

<div class="card">
    <h2>Technologies Used</h2>
    <ul>
        <li>PHP</li>
        <li>MySQL</li>
        <li>HTML & CSS</li>
        <li>XAMPP / InfinityFree</li>
    </ul>
</div>

</div>

</body>
</html>
