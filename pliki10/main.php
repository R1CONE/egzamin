<?php 
$con = new mysqli("localhost", "root", "", "wyprawy");

if ($con->connect_error) {
    echo "Błąd połączenia: " . $con->connect_error;
} else {
    echo "Połączenie udane";
}
?>

<!DOCTYPE html>``
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    
</body>
</html>