<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// USE CONFIG FILE
require_once "config.php";

// FETCH DATA
$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
body {
  margin: 0;
  font-family: Arial;
  background: #121418;
  color: #fff;
  display: flex;
}

/* SIDEBAR (MATCHED STYLE) */
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
  padding: 20px;
}

h1 {
  color: #c1c7ff;
}

.btn {
  background: #3b82f6;
  padding: 10px 15px;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

/* TABLE */
table {
  width: 100%;
  margin-top: 20px;
  border-collapse: collapse;
  background: #1c1f26;
}

th, td {
  padding: 10px;
}

th {
  background: #232732;
  color: #9ca3af;
}

tr {
  border-bottom: 1px solid #2a2f3a;
}

tr:hover {
  background: #232732;
}

/* BUTTONS */
.edit {
  background: #38bdf8;
  border: none;
  padding: 5px 10px;
  color: white;
  cursor: pointer;
}

.delete {
  background: #ef4444;
  border: none;
  padding: 5px 10px;
  color: white;
  cursor: pointer;
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

<h1>👟Shoe Inventory Management System</h1>
<p style="color:#9ca3af; margin-top:-10px;">
  Manage your products (Create, Read, Update, Delete)
</p>

<h2>Product List</h2>

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
  <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td>

        <a href="update.php?id=<?php echo $row['id']; ?>">
          <button class="edit">Edit</button>
        </a>

        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this product?')">
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