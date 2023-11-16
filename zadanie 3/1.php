<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="tablica1">Podaj liczby dla pierwszej tablicy (oddzielone przecinkiem): </label>
    <input type="text" name="tablica1" id="tablica1" required><br>

    <label for="tablica2">Podaj liczby dla drugiej tablicy (oddzielone przecinkiem): </label>
    <input type="text" name="tablica2" id="tablica2" required><br>

    <button type="submit">Sortuj i Łącz</button>
    <br><br>
</form>
<?php
//1
$numbers = range(1, 10);
$suma = array_sum($numbers);
echo "Suma: $suma ";


echo "<br/><br/>";

//2
$cities = array("Warszawa", "Zielona Góra", "Koszalin", "Niger", "Nigeria", "Gdańsk", "Szczecin", "Paryż");
sort($cities);
echo "Posortowane miasta:\n";
foreach ($cities as $city) {
    echo $city . "\n";
}

echo "<br/><br/>";

//3
$fruits = array("jabłko", "banan", "grejpfrut", "granat", "kiwi");
$checkFruit = "jabłko";
if (in_array($checkFruit, $fruits)) {
    echo "$checkFruit znajduje się w tablicy owoców";
} else {
    echo "$checkFruit nie znajduje się w tablicy owoców.";
}


echo "<br/><br/>";

//4
$students = array(
    "student1" => array(
        "imie" => "Chad",
        "nazwisko" => "Nigeryjczyk",
        "wiek" => 68,
        "oceny" => array(4.5, 5.0, 3.5)
    ),
    "student2" => array(
        "imie" => "Janusz",
        "nazwisko" => "Cham",
        "wiek" => 12,
        "oceny" => array(3.0, 4.0, 4.5)
    ),
    "student3" => array(
        "imie" => "Kamil",
        "nazwisko" => "Ślimak",
        "wiek" => 80,
        "oceny" => array(5.0, 4.5, 4.0)
    )
);

foreach ($students as $key => $student) {
    echo "Student $key:\n";
    echo "Imię: {$student['imie']}\n";
    echo "Nazwisko: {$student['nazwisko']}\n";
    echo "Wiek: {$student['wiek']}\n";
    echo "Oceny: " . implode(", ", $student['oceny']) . "\n\n";
    echo"<br/>";
}


echo "<br/><br/>";

//5
$inputArray1 = $_POST["tablica1"];
    $inputArray2 = $_POST["tablica2"];

    $array1 = explode(",", $inputArray1);
    $array2 = explode(",", $inputArray2);

    $mergedArray = array_merge($array1, $array2);

    sort($mergedArray);

    echo "Połączona i posortowana tablica: " . implode(", ", $mergedArray);

?>
</body>
</html>