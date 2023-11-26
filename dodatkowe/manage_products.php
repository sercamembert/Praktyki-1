<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_product'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $sql = "INSERT INTO products (name, price) VALUES ('$name', $price)";
        $conn->query($sql);
    }

    if (isset($_POST['edit_product'])) {
        $product_id = $_POST['product_id'];
        $new_price = $_POST['new_price'];

        $sql = "UPDATE products SET price = $new_price WHERE id = $product_id";
        $conn->query($sql);
    }

    if (isset($_POST['delete_product'])) {
        $product_id = $_POST['product_id'];

        $sql = "DELETE FROM products WHERE id = $product_id";
        $conn->query($sql);
    }

    header("Location: index.php");
    exit(); 
}

$conn->close();
?>
