<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Maszota</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Bok a: <input type="text" name="a">
  <br>
  Bok b: <input type="text" name="b">
  <br>
  <input type="submit">
</form>

<?php
  if(empty($_POST['a']) || empty($_POST['b'])){
    echo "Podaj obie wartości!";
  } else {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $pole = $a * $b;
    echo "Pole prostokąta: $pole";
  }
?>
</body>
</html>