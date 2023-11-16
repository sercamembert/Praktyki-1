<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4 Filip Maszota</title>
</head>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Imie:</label>
    <input type="text" name="name" id="name" required>
    <br><br>

    <label for="surname">Nazwisko:</label>
    <input type="text" name="surname" id="surname" required>
    <br><br>

    <label for="message">Wiadomość:</label>
    <textarea name="message" id="message" required></textarea>
    <br><br>

    <label for="pesel">Pesel:</label>
    <input type="text" name="pesel" id="pesel" pattern="\d+" minlength="11" maxlength="11" required>
    <br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <br><br>

    <input type="submit" value="Prześlij formularz">
    <br><br>
</form>

<?php
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function is_empty($value) {
        return empty($value);
    }

    function check_length($value, $min_length) {
        return strlen($value) >= $min_length;
    }

    function is_numeric_only($value) {
        return ctype_digit($value);
    }

    function is_alpha_only($value) {
        return ctype_alpha($value);
    }

    function has_at_symbol($value) {
        return strpos($value, '@') !== false;
    }

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $message = $_POST["message"];
    $pesel = $_POST["pesel"];
    $email = $_POST["email"];

    if (is_empty($name) || is_empty($surname) || is_empty($message) || is_empty($pesel) || is_empty($email)) {
        $error_message = "Wszystkie pola formularza są wymagane.";
    } elseif (!check_length($name, 3) || !check_length($surname, 3) || !check_length($message, 10) || !check_length($pesel, 11) || !check_length($email, 8)) {
        $error_message = "Proszę sprawdzić długość wprowadzonych danych.";
    } elseif (!is_alpha_only($name) || !is_alpha_only($surname)) {
        $error_message = "Imię i nazwisko mogą zawierać tylko litery.";
    } elseif (!is_numeric_only($pesel)) {
        $error_message = "Pesel może zawierać tylko cyfry.";
    } elseif (!has_at_symbol($email)) {
        $error_message = "Adres e-mail musi zawierać znak @.";
    }

    if (!empty($error_message)) {
        echo '<div class="error">' . $error_message . '</div>';
    }
}
?>

</body>
</html>