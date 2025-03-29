<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo "<h1>Datos recibidos:</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
} else {
    echo "<p>Error: No se recibieron datos.</p>";
}
?>
