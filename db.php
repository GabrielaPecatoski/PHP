<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
</head>
<body>
    <h1>Bem-vindo à Biblioteca Virtual</h1>
   
    <?php

    require_once 'db.php';

    $query = "SELECT * FROM livros";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Livros Disponíveis:</h2>";
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>{$row['titulo']} - {$row['autor']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum livro encontrado.</p>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
