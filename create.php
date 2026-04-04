<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    $conn->query("INSERT INTO products (name, description, quantity) 
                  VALUES ('$name', '$description', '$quantity')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Product</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #121418;
    color: #fff;

    /* CENTER EVERYTHING */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* FORM BOX */
.form-container {
    width: 400px;
    background: #1c1f26;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.5);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #c1c7ff;
}

label {
    display: block;
    margin-bottom: 5px;
    margin-top: 10px;
    color: #9ca3af;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    background: #232732;
    color: white;
}

textarea {
    resize: none;
    height: 80px;
}

/* BUTTON */
.btn {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    background: #3b82f6;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background: #2563eb;
}

/* BACK LINK */
.back {
    display: block;
    margin-top: 15px;
    text-align: center;
    color: #9ca3af;
    text-decoration: none;
}

.back:hover {
    color: #fff;
}
</style>
</head>

<body>

<div class="form-container">
    <h2>➕ Add Product</h2>

    <form method="POST">
        <label>Product Name</label>
        <input type="text" name="name" required>

        <label>Description</label>
        <textarea name="description"></textarea>

        <label>Quantity</label>
        <input type="number" name="quantity" required>

        <button type="submit" name="submit" class="btn">Save Product</button>
    </form>

    <a href="index.php" class="back">← Back to Dashboard</a>
</div>

</body>
</html>