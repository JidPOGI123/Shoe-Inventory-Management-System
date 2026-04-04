<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Developer</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #121418;
    color: #fff;
    display: flex;
}

/* SIDEBAR (MATCHED STYLE WITH CONTACT.PHP) */
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

h1 {
    color: #c1c7ff;
    margin-bottom: 20px;
}

/* CARD */
.card {
    background: #1c1f26;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.4);
}

/* PROFILE IMAGE */
.card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    display: block;
    margin-bottom: 15px;
    border: 3px solid #3b82f6;
}

.card h2 {
    color: #3b82f6;
    margin-bottom: 10px;
}

.card p {
    color: #d1d5db;
    line-height: 1.6;
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

<h1>👨‍💻 Developer Page</h1>

<!-- MEMBER 1 -->
<div class="card">
    <img src="images/benitez.jpg" alt="Member 1">
    <h2>Dexter Benitez</h2>
    <p><strong>Role:</strong> Backend Developer (PHP Developer) | Responsible for the server-side logic of the system.</p>
    <p><strong>Contribution:</strong> Write PHP code for CRUD operations (Create, Read, Update, Delete),
Connect and interact with the database (MySQL via XAMPP),
Handle form submissions and data processing,
Ensure data validation and security</p>
</div>

<!-- MEMBER 2 -->
<div class="card">
    <img src="images/jhade.jpeg" alt="Member 2">
    <h2>Jhade Zymond Fernandez</h2>
    <p><strong>Role:</strong> Database Developer (Database Administrator) | Manages the database structure and data storage.</p>
    <p><strong>Contribution:</strong> Design database tables and relationships in MySQL,
Use phpMyAdmin to manage data (tables, queries),
Optimize database performance and structure,
Ensure data integrity and backup</p>
</div>

<!-- MEMBER 3 -->
<div class="card">
    <img src="images/kyle.jpg" alt="Member 3">
    <h2>Kyle Regulto</h2>
   <p><strong>Role:</strong> Frontend Designer (UI/UX Developer) | Focuses on the design and user interface of the system.</p>
    <p><strong>Contribution:</strong> Create and design web pages using HTML and CSS,
Improve user experience and layout design,
Ensure the system is responsive and visually appealing,
Work on navigation, forms, and page styling</p>
</div>

<!-- PROJECT OVERVIEW -->
<div class="card">
    <h2>Project Overview</h2>
    <p>
        This system is a Shoe Inventory CRUD (Create, Read, Update, Delete) application developed using PHP and MySQL. It allows users to efficiently manage shoe inventory data by performing basic operations such as adding new shoe products, updating product details, and deleting records. The system demonstrates how web applications can handle inventory data in a structured and organized manner, making it easier to track and manage shoe products effectively.
    </p>
</div>

</div>

</body>
</html>