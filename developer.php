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
<title>Developer</title>

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

/* SIDEBAR GLASS */
.sidebar{
  width:240px;
  padding:20px;

  background:rgba(255,255,255,0.08);
  backdrop-filter:blur(20px);
  -webkit-backdrop-filter:blur(20px);

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
  margin-top:20px;
}

/* MAIN */
.main{
  flex:1;
  padding:30px;
}

/* TITLE */
h1{
  font-size:26px;
  margin-bottom:20px;
}

/* CARD */
.card{
  background:rgba(255,255,255,0.08);
  backdrop-filter:blur(20px);
  border-radius:12px;
  padding:20px;
  margin-bottom:15px;
  transition:0.3s;
}

.card:hover{
  transform:translateY(-5px);
}

/* IMAGE */
.card img{
  width:110px;
  height:110px;
  border-radius:50%;
  object-fit:cover;
  border:3px solid #38bdf8;
  margin-bottom:10px;
}

.card h2{
  color:#38bdf8;
  margin-bottom:5px;
}

.card p{
  color:#cbd5e1;
  line-height:1.6;
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

<h1>👨‍💻 Developer Team</h1>

<div class="card">
    <img src="images/benitez.jpg" alt="Developer 1">
    <h2>Backend Developer</h2>
    <p>Handles PHP logic, CRUD operations, and system functionality.</p>
</div>

<div class="card">
    <img src="images/jhade.jpeg" alt="Developer 2">
    <h2>Database Developer</h2>
    <p>Responsible for MySQL database design and data management.</p>
</div>

<div class="card">
    <img src="images/kyle.jpg" alt="Developer 3">
    <h2>UI/UX Designer</h2>
    <p>Designs user interface, layout, and overall user experience.</p>
</div>

<div class="card">
    <h2>Project Overview</h2>
    <p>
        Shoe Inventory Management System using PHP & MySQL with CRUD functionality.
    </p>
</div>

</div>

</body>
</html>
