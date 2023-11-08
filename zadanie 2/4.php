<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Maszota</title>
</head>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Pierwsza liczba: <input type="number" name="first_number">
  <br>
  Druga liczba: <input type="number" name="second_number">
  <br>
  <input type="submit">
</form>

<?php
  if(empty($_POST['first_number']) || empty($_POST['second_number'])){
    echo "Podaj obie wartości!";
  } else {
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    $suma = $first_number + $second_number;
    $roznica = $first_number - $second_number;
    $iloczyn = $first_number * $second_number;
    $modulo = $first_number % $second_number;

    echo "Suma: $suma <br>";
    echo "Różnica: $roznica <br>";
    echo "Iloczyn: $iloczyn <br>";
    echo "Modulo: $modulo <br>";
  }
?>
    
</body>
</html>