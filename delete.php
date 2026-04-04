<?php
require_once "config.php";

$id = $_GET['id'];

// DELETE SELECTED ROW
$conn->query("DELETE FROM products WHERE id=$id");

// CHECK IF TABLE IS EMPTY
$result = $conn->query("SELECT COUNT(*) as total FROM products");
$row = $result->fetch_assoc();

if ($row['total'] == 0) {
    // RESET AUTO INCREMENT
    $conn->query("ALTER TABLE products AUTO_INCREMENT = 1");
}

header("Location: index.php");
?>