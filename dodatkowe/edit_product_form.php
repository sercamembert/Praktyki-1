<form action="manage_products.php" method="post">
    <label for="product_id">ID Produktu:</label>
    <input type="number" name="product_id" required><br>

    <label for="new_price">Nowa Cena:</label>
    <input type="number" name="new_price" step="0.01" required><br>

    <input type="submit" name="edit_product" value="Edytuj Produkt">
</form>
