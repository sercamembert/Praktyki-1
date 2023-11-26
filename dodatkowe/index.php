<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel Administratora</h1>

    <h2>Lista Produktów</h2>
    <?php include 'show_products.php'; ?>

    <h2>Dodaj Produkt</h2>
    <?php include 'add_product_form.php'; ?>

    <h2>Edytuj Produkt</h2>
    <?php include 'edit_product_form.php'; ?>

    <?php include 'manage_products.php'; ?>
</body>
</html>