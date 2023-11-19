<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döcument</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <img src="logo.png" alt="logo" class="logo">
                <ul class="header-list">
                    <li class="header-el">Hömë</li>
                    <li>Üsërs</li>
                    <li>Gällëry</li>
                    <li>Sign In</li>
                </ul>
        </header>
        <section class="main">
            <section class="left ">
                <!-- do zrobienia tabela na dane -->
                <table></table>
            </section>
            <section class="right ">
            <section class="right ">
                <p>Zarejestruj sie</p>
                <form method="post" >

                    <div class="formdiv">
                        <label for="firstName">Imię:</label>
                        <input type="text" id="firstName" name="firstName" pattern="[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ ]+" required>
                    </div>

                    <div class="formdiv">
                        <label for="lastName">Nazwisko:</label>
                        <input type="text" id="lastName" name="lastName" pattern="[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ\- ]+" required>
                    </div>

                    <div class="formdiv">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                    </div>  

                    <div class="formdiv">
                        <label for="phone">Numer telefonu:</label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]+" required>
                    </div>

                    <button type="reset">Wyczyść</button>
                    <button type="submit">Zarejestruj</button>
                </form>
                <?php
$error_messages = array(
    "firstName" => "",
    "lastName" => "",
    "email" => "",
    "phone" => ""
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function is_empty($value) {
        return empty($value);
    }

    function check_length($value, $min_length, $max_length = PHP_INT_MAX) {
        $length = strlen($value);
        return ($length >= $min_length && $length <= $max_length);
    }

    function is_alpha_only($value) {
        return preg_match("/^[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ\- ]+$/", $value);
    }

    function is_numeric_only($value) {
        return preg_match("/^[0-9]+$/", $value);
    }

    function is_valid_email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    if (is_empty($firstName)) {
        $error_messages["firstName"] = "Imię jest wymagane.";
    } elseif (!check_length($firstName, 3, 20)) {
        $error_messages["firstName"] = "Imię powinno mieć od 3 do 20 znaków.";
    } 

    if (is_empty($lastName)) {
        $error_messages["lastName"] = "Nazwisko jest wymagane.";
    } elseif (!check_length($lastName, 3, 20)) {
        $error_messages["lastName"] = "Nazwisko powinno mieć od 3 do 20 znaków.";
    } elseif (!is_alpha_only($lastName)) {
        $error_messages["lastName"] = "Nazwisko może zawierać tylko litery, myślnik, lub spację.";
    }

    if (is_empty($email)) {
        $error_messages["email"] = "E-mail jest wymagany.";
    } elseif (!is_valid_email($email)) {
        $error_messages["email"] = "Proszę podać poprawny adres e-mail.";
    }

    if (is_empty($phone)) {
        $error_messages["phone"] = "Numer telefonu jest wymagany.";
    } elseif (!is_numeric_only($phone)) {
        $error_messages["phone"] = "Numer telefonu może zawierać tylko cyfry.";
    }

    if (array_filter($error_messages)) {
        echo '<div class="error"><ul>';
        foreach ($error_messages as $error) {
            if ($error !== "") {
                echo '<li>' . $error . '</li>';
            }
        }
        echo '</ul></div>';
        header("Location: index.php");
        exit();
    } else {
        // Wywołaj process_form.php tylko jeśli nie ma błędów
        include 'process_form.php';
    }
}
?>

            </section>
            </section>
        </section>
        <section class="down">
            <img src="img1.png" alt="këvin lëvrönë <3">
            <img src="img2.png" alt="këvin lëvrönë <3">
            <img src="img3.png" alt="këvin lëvrönë <3">
            <img src="img4.png" alt="këvin lëvrönë <3">
            <img src="img5.png" alt="këvin lëvrönë <3">
            <img src="img6.png" alt="këvin lëvrönë <3">
            <img src="img7.png" alt="këvin lëvrönë <3">
            <img src="img8.png" alt="këvin lëvrönë <3">
        </section>
        <footer>
        Äütör Filip Mäszötä dëlü/siönäl
        </footer>
    </main>
</body>
</html>