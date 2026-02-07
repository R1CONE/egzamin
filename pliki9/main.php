<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkolenia</title>
</head>
<body>
<?php
    $c = mysqli_connect('localhost', 'root', '', 'szkolenia');

    if (!$c) {
        die('Błąd połączenia z bazą danych');
    }

    $sqlKursy = "SELECT kod, nazwa, cena FROM kursy ORDER BY cena";
    $kursy = mysqli_query($c, $sqlKursy);
?>

<table border="1">
    <tr>
        <th>Kurs</th>
        <th>Nazwa</th>
        <th>Cena</th>
    </tr>

    <?php
        while ($kurs = mysqli_fetch_assoc($kursy)) {
            $kodKursu = $kurs['kod'];
            $nazwaKursu = $kurs['nazwa'];
            $cenaKursu = $kurs['cena'];

            echo "<tr>";
            echo "<td><img src='{$kodKursu}.jpg' alt='kurs'></td>";
            echo "<td>$nazwaKursu</td>";
            echo "<td>$cenaKursu</td>";
            echo "</tr>";
        }
    ?>
</table>

<form action="" method="get">
    <p>
        <label for="imie">Imię</label>
        <input type="text" name="imie" id="imie">
    </p>

    <p>
        <label for="nazwisko">Nazwisko</label>
        <input type="text" name="nazwisko" id="nazwisko">
    </p>

    <p>
        <label for="wiek">Wiek</label>
        <input type="number" name="wiek" id="wiek">
    </p>

    <p>
        <label for="rodzaj">Rodzaj kursu</label>
        <select name="rodzaj" id="rodzaj">
            <?php
                $sqlNazwyKursow = "SELECT nazwa FROM kursy";
                $nazwyKursow = mysqli_query($c, $sqlNazwyKursow);

                while ($wiersz = mysqli_fetch_assoc($nazwyKursow)) {
                    echo "<option value='{$wiersz['nazwa']}'>{$wiersz['nazwa']}</option>";
                }
            ?>
        </select>
    </p>

    <p>
        <input type="submit" value="Dodaj dane">

        <?php
if (isset($_GET['imie'], $_GET['nazwisko'], $_GET['wiek'], $_GET['rodzaj'])) {

    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $wiek = $_GET['wiek'];
    $rodzaj = $_GET['rodzaj'];

    if ($imie === '' || $nazwisko === '' || $wiek === '') {
        echo "Nie wpisałeś jakichś danych!";
    } else {

        $query = "INSERT INTO uczestnicy (imie, nazwisko, wiek) VALUES ('$imie', '$nazwisko', '$wiek')";

        mysqli_query($c, $query);
    }
}
?>
    </p>
</form>

<?php
    mysqli_close($c);
?>
</body>
</html>
