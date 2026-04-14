<?php
session_start();
include 'config.php';

// 🔒 PROTECT PAGE
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// CHECK ID
if (!isset($_GET['id'])) {
    die("Invalid request");
}

$id = $_GET['id'];

// FETCH DATA
$result = $conn->query("SELECT * FROM products WHERE id=$id");

if ($result->num_rows == 0) {
    die("Product not found");
}

$row = $result->fetch_assoc();

// UPDATE DATA
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $desc = $_POST['description'];
    $qty  = $_POST['quantity'];

    $sql = "UPDATE products 
            SET name='$name', description='$desc', quantity='$qty' 
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Product</title>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Arial;
}

body{
  display:flex;
  min-height:100vh;
  background:linear-gradient(135deg,#0f172a,#1e293b,#0ea5e9);
  color:white;
}

/* SIDEBAR */
.sidebar{
  width:240px;
  padding:20px;

  background:rgba(255,255,255,0.08);
  backdrop-filter:blur(20px);
  border-right:1px solid rgba(255,255,255,0.15);
}

.sidebar h2{
  text-align:center;
  color:#38bdf8;
  margin-bottom:20px;
}

.sidebar ul{
  list-style:none;
}

.sidebar ul li{
  margin:12px 0;
}

.sidebar ul li a{
  display:block;
  padding:10px;
  border-radius:8px;
  color:#e2e8f0;
  text-decoration:none;
  transition:0.2s;
}

.sidebar ul li a:hover{
  background:rgba(255,255,255,0.15);
  transform:translateX(5px);
}

.logout{
  color:#f87171 !important;
}

/* MAIN */
.main{
  flex:1;
  display:flex;
  justify-content:center;
  align-items:center;
}

/* FORM */
.form-container{
  width:380px;
  background:rgba(255,255,255,0.08);
  backdrop-filter:blur(20px);
  padding:25px;
  border-radius:12px;
  box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

/* TITLE */
h2{
  text-align:center;
  margin-bottom:20px;
  color:#38bdf8;
}

/* LABEL */
label{
  display:block;
  margin-top:10px;
  margin-bottom:5px;
  color:#cbd5e1;
  font-size:14px;
}

/* INPUTS */
input, textarea{
  width:100%;
  padding:10px;
  border:none;
  border-radius:8px;
  background:rgba(255,255,255,0.1);
  color:white;
  outline:none;
}

textarea{
  height:90px;
  resize:none;
}

/* BUTTON */
.btn{
  width:100%;
  margin-top:15px;
  padding:10px;
  border:none;
  border-radius:8px;
  background:#38bdf8;
  color:black;
  font-weight:bold;
  cursor:pointer;
  transition:0.2s;
}

.btn:hover{
  transform:scale(1.05);
  background:#22c55e;
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
    <li><a href="index.php" class="logout">Logout</a></li>
  </ul>
</div>

<!-- MAIN -->
<div class="main">

<div class="form-container">

<h2>✏️ Update Product</h2>

<form method="POST">

    <label>Product Name</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

    <label>Description</label>
    <textarea name="description"><?php echo $row['description']; ?></textarea>

    <label>Quantity</label>
    <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required>

    <button type="submit" name="update" class="btn">Update Product</button>

</form>

</div>

</div>

</body>
</html>
