<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Maszota</title>
</head>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Bok a: <input type="number" name="a">
  <br>
  Bok b: <input type="number" name="b">
  <br>
  Bok c: <input type="number" name="c">
  <br>
  <input type="submit">
</form>

<?php
  if(empty($_POST['a']) || empty($_POST['b']) || empty($_POST['c'])){
    echo "BŁĄD";
  } else {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
        echo "Z podanych boków $a, $b, $c można zbudować trójkąt.";
    } else {
        echo "Z podanych boków $a, $b, $c nie można zbudować trójkąta.";
    }
  }
?>
    
</body>
</html>