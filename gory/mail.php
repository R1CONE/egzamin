<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medica";

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
    <section id = "id4"></section>
    <section id = "id5"></section>


</body>
</html>
