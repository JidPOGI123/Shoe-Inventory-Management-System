<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 🔒 PROTECT PAGE
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

require_once "config.php";

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

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
  margin-top: 20px;
  color: #f87171 !important;
}

/* MAIN */
.main {
  flex: 1;
  padding: 30px;
}

/* HEADER */
h1 {
  font-size: 26px;
  margin-bottom: 5px;
}

.subtitle {
  color: #cbd5e1;
  margin-bottom: 20px;
}

/* BUTTON */
.btn {
  padding: 10px 15px;
  background: #38bdf8;
  border: none;
  border-radius: 10px;
  color: black;
  font-weight: bold;
  cursor: pointer;
  transition: 0.2s;
}

.btn:hover {
  transform: scale(1.05);
  background: #22c55e;
}

/* TABLE GLASS */
table {
  width: 100%;
  margin-top: 20px;
  border-collapse: collapse;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(20px);
  border-radius: 12px;
  overflow: hidden;
}

th, td {
  padding: 12px;
  text-align: center;
}

th {
  background: rgba(255,255,255,0.12);
  color: #cbd5e1;
}

tr:hover {
  background: rgba(255,255,255,0.05);
}

/* ACTION BUTTONS */
.edit {
  background: #38bdf8;
  border: none;
  padding: 6px 10px;
  border-radius: 6px;
  cursor: pointer;
}

.delete {
  background: #f87171;
  border: none;
  padding: 6px 10px;
  border-radius: 6px;
  cursor: pointer;
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

  <h1>👟 Shoe Inventory Management System</h1>
  <div class="subtitle">Manage your products efficiently</div>

  <a href="create.php">
    <button class="btn">+ Add Product</button>
  </a>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>Actions</th>
    </tr>

    <?php if ($result && mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['id']; ?></td>
          <td><?= $row['name']; ?></td>
          <td><?= $row['description']; ?></td>
          <td><?= $row['quantity']; ?></td>
          <td>
            <a href="update.php?id=<?= $row['id']; ?>">
              <button class="edit">Edit</button>
            </a>

            <a href="delete.php?id=<?= $row['id']; ?>">
              <button class="delete">Delete</button>
            </a>
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="5">No data found</td>
      </tr>
    <?php endif; ?>

  </table>

</div>

</body>
</html>
