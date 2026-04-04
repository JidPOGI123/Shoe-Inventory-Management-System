<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #121418;
    color: #fff;
    display: flex;
}

/* SIDEBAR (same style) */
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
    text-align: left;
}

.sidebar ul li a:hover {
    background: #2a2f3a;
    color: #fff;
}

/* MAIN */
.main {
    flex: 1;
    padding: 30px;
}

/* CARD */
.card {
    background: #1c1f26;
    padding: 25px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.4);
}

h1 {
    color: #c1c7ff;
    margin-bottom: 20px;
}

h2 {
    color: #3b82f6;
    margin-bottom: 10px;
}

p, li {
    color: #d1d5db;
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

<h1>📘 About the Project</h1>

<!-- PROJECT TITLE -->
<div class="card">
    <h2>Project Title</h2>
    <p><strong>👟 Shoe Inventory Management System</strong></p>
</div>

<!-- PURPOSE -->
<div class="card">
    <h2>Purpose of the System</h2>
    <p>
        The purpose of this system is to manage product data efficiently.
        It allows users to add, view, update, and delete products using a web interface.
        This project demonstrates how CRUD operations work in a real-world web application.
    </p>
</div>

<!-- FEATURES -->
<div class="card">
    <h2>System Features</h2>
    <ul>
        <li>Create new product records</li>
        <li>Read and display product data</li>
        <li>Update existing product information</li>
        <li>Delete unwanted products</li>
        <li>User-friendly dashboard interface</li>
    </ul>
</div>

<!-- TECHNOLOGIES -->
<div class="card">
    <h2>Technologies Used</h2>
    <ul>
        <li>XAMPP (Local server environment)</li>
        <li>PHP (Backend scripting)</li>
        <li>MySQL / phpMyAdmin (Database management)</li>
        <li>HTML, CSS (Frontend design)</li>
        <li>InfinityFree (Hosting platform)</li>
    </ul>
</div>

</div>

</body>
</html>