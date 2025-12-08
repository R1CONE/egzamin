<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Błąd połączenia: " . $conn->connect_error;
} else {
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ZDOBYWCY GÓR
    </title>
    <link rel = "stylesheet" href = "styli.css">
</head>
<body>
    
    <section id = "id1">Klub zdobywców gór polskich</section>
    <section id = "id2"></section>
    <section id = "id3"><img id = "zdjecie" src = "photo.webp"></section>
    <section id = "id4">

    <table border="1">
  <thead>
    <tr>
      <td>Пол           </td>
      <td>Колличество   </td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Мальчики      </td>
      <td>3</td>
    </tr>
    <tr>
      <td>Девочки       </td>
      <td>4</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan = "2">Итог: 5</td>
    </tr>
  </tfoot>
</table>

    </section>
    <section id = "id5"></section>


</body>
</html>
