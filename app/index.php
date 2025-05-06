<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Patata Gaitera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #6b4e16;
        }
        img {
            max-width: 400px;
            border: 5px solid #6b4e16;
            border-radius: 20px;
        }
        p {
            font-size: 1.2em;
            color: #444;
        }
    </style>
</head>
<body>
    <h1>🎵 ¡La Patata Gaitera! 🥔</h1>
    <p>Desde Galicia para el mundo, una patata que toca la gaita mejor que muchos humanos.</p>

    <?php
        // Puedes cambiar esta URL por una imagen real de una patata tocando la gaita
        $imagen = "https://via.placeholder.com/400x300.png?text=Patata+Gaitera"; 
        echo "<img src='$imagen' alt='Patata tocando la gaita'>";
    ?>

    <p>¿Quién dijo que las hortalizas no tienen talento?</p>
</body>
</html>

