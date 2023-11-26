<?php
include 'db_config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nazwa Produktu</th><th>Cena</th><th>Akcje</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["price"]."</td>";
        
        echo "<td><form action='manage_products.php' method='post'>";
        echo "<input type='hidden' name='product_id' value='".$row["id"]."'>";
        echo "<input type='submit' name='delete_product' value='Usuń'>";
        echo "</form></td>";
        
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Brak produktów w bazie danych.";
}

$conn->close();
?>
