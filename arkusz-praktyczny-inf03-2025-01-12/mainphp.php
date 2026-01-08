
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    


$conn = new mysqli(hostname: "localhost",username: "root",password: "",database: "piekarnia");

if ($conn->connect_error) {
    echo "Błąd połączenia: " . $conn->connect_error;
} else {
}

    
    ?>
</body>
</html>
