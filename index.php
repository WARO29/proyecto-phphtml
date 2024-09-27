<?php

require("main.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>

    <?php if($status == "danger"): ?>
        <div class="alert danger">
            <span>!Surgio un problema!</span>
        </div>
    <?php endif; ?>

    <?php if($status == "success"): ?>
        <div class="alert success">
            <span>!Mensaje Enviado con exito!</span>
        </div>
    <?php endif; ?>
    <form action="./" class="formulario" method="post">
            <h1>Formulario de contacto</h1> 
            <div class="container">
                <div class="fila1">
                    <label for="name">Nombre</label>
                    <input type="text" placeholder="Escriba aqui su nombre" class="caja1" name="name" id="name">
                </div>
                <div class="fila2">
                    <label for="email">Correo</label>
                    <input type="email" class="caja2" name="email" id="email">
                </div>
                <div class="fila3">
                    <label for="subject">Asunto</label>
                    <input type="text" class="caja3" name="subject" id="subject">
                </div>
                <div class="fila4">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <input type="submit" class="boton" value="Enviar" name="form">
            </div>
    </form>
</body>
<script>
</script>
</html>