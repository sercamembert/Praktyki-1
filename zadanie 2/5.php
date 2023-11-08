<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Maszota</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Pierwszy napis i drugi napis oddzielone spacją: <input type="text" name="input">
  <br>
  <input type="submit">
</form>

<?php
  if(empty($_POST['input'])){
    echo "Proszę wprowadzić dwa napisy oddzielone spacją.";
  } else {
    $input = $_POST['input'];
    $parts = explode(' ', $input);
    $napis1 = $parts[0];
    $napis2 = $parts[1];
    echo "%$napis2 $napis1%";
  }
?>
    
</body>
</html>