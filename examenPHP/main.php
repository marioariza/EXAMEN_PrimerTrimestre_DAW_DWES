<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user']) && !isset($_SESSION['password'])) {
    die("<a href='index.php'>Error, debe identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>main</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Bienvenido <?= $_SESSION['user'] ?>
            </h1>
            <p class="ml-5"><a href="logout.php">Pulse aquí para salir </a> </p>
        </div>
    </div>
</body>

</html>