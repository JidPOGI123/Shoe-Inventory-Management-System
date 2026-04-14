<?php
session_start();

$error = "";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (
        isset($_SESSION['registered_user']) &&
        isset($_SESSION['registered_pass']) &&
        $username === $_SESSION['registered_user'] &&
        $password === $_SESSION['registered_pass']
    ) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Incorrect credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Arial;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg, #0f172a, #1e293b, #0ea5e9);
  overflow: hidden;
}

/* SOFT BACKGROUND BLUR ORBS */
.circle {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.5;
}

.circle.one {
  background: #38bdf8;
  top: -50px;
  left: -50px;
}

.circle.two {
  background: #22c55e;
  bottom: -80px;
  right: -80px;
}

/* TITLE */
.title {
  position: absolute;
  top: 40px;
  width: 100%;
  text-align: center;
  font-size: 26px;
  font-weight: 600;
  color: white;
  letter-spacing: 1px;
}

/* GLASS LOGIN */
.box {
  width: 340px;
  padding: 30px;
  border-radius: 16px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);

  border: 1px solid rgba(255,255,255,0.15);
  box-shadow: 0 20px 40px rgba(0,0,0,0.3);

  text-align: center;
  color: white;
}

h2 {
  margin-bottom: 15px;
  font-weight: 500;
}

/* INPUT */
input {
  width: 100%;
  padding: 12px;
  margin-top: 10px;

  border: none;
  border-radius: 10px;
  outline: none;

  background: rgba(255,255,255,0.12);
  color: white;

  transition: 0.2s;
}

input:focus {
  background: rgba(255,255,255,0.2);
}

/* BUTTON */
button {
  width: 100%;
  margin-top: 15px;
  padding: 12px;

  border: none;
  border-radius: 10px;

  background: #ffffff;
  color: #0f172a;
  font-weight: bold;

  cursor: pointer;
  transition: 0.2s;
}

button:hover {
  transform: scale(1.03);
  background: #e2e8f0;
}

/* ERROR */
.error {
  margin-top: 10px;
  color: #f87171;
  font-size: 14px;
}

/* REGISTER */
.register {
  margin-top: 15px;
  font-size: 13px;
  color: #cbd5e1;
}

.register a {
  color: #38bdf8;
  text-decoration: none;
}

.register a:hover {
  text-decoration: underline;
}
</style>
</head>

<body>

<!-- BACKGROUND GLOW -->
<div class="circle one"></div>
<div class="circle two"></div>

<!-- TITLE -->
<div class="title">
  👟 Shoe Inventory Management System
</div>

<!-- LOGIN BOX -->
<div class="box">

  <h2>Sign in</h2>

  <form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" name="login">Continue</button>
  </form>

  <?php if (!empty($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
  <?php } ?>

  <div class="register">
    Don’t have an account? <a href="register.php">Create one</a>
  </div>

</div>

</body>
</html>
