<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    echo "<h2 style='font-family: Arial; color: #2ecc71;'>Gracias, $nombre. Tu formulario ha sido enviado correctamente.</h2>";
}
?>
