<?php
include 'config.php';

// CHECK ID
if (!isset($_GET['id'])) {
    die("Invalid request");
}

$id = $_GET['id'];

// FETCH EXISTING DATA
$result = $conn->query("SELECT * FROM products WHERE id=$id");

if ($result->num_rows == 0) {
    die("Product not found");
}

$row = $result->fetch_assoc();

// UPDATE DATA
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $desc = $_POST['description'];
    $qty = $_POST['quantity'];

    $sql = "UPDATE products 
            SET name='$name', description='$desc', quantity='$qty' 
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: index.php");
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
body {
    margin: 0;
    font-family: Arial;
    background: #121418;
    color: #fff;

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

/* BLUE BUTTON (same as create.php) */
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
    <h2>✏️ Edit Product</h2>

    <form method="POST">
        <label>Product Name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <label>Description</label>
        <textarea name="description"><?php echo $row['description']; ?></textarea>

        <label>Quantity</label>
        <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required>

        <button type="submit" name="update" class="btn">Update Product</button>
    </form>

    <a href="index.php" class="back">← Back to Dashboard</a>
</div>

</body>
</html>