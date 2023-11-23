<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Maszota zadanie 8</title>
</head>
<body>
<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "praktyki"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

$sql_select = "SELECT * FROM przepisy";
$result = mysqli_query($conn, $sql_select);

if (mysqli_num_rows($result) > 0) {
    echo "<br>Dane z tabeli przepisy:<br>";
    echo "<table border='1'><tr><th>Id</th><th>nazwa</th><th>Ocena</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['Id']}</td><td>{$row['nazwa']}</td><td>{$row['Ocena']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak danych w tabeli przepisy.<br>";
}

mysqli_close($conn);
?>

</body>
</html>