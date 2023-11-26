<form action="manage_products.php" method="post">
    <label for="name">Nazwa Produktu:</label>
    <input type="text" name="name" required><br>

    <label for="price">Cena:</label>
    <input type="number" name="price" step="0.01" required><br>

    <input type="submit" name="add_product" value="Dodaj Produkt">
</form>
