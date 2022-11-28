<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>index</title>
</head>
<body>
    <form action="login.php" method="post">
        <div class="mb-3 w-50">
            <label for="user" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="meter_user" placeholder="Usuario...">
        </div>
        <div class="mb-3 w-50">
            <label for="password" class="form-label">Contaseña:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="meter_password" placeholder="Contraseña...">
        </div>
        <div class="mb-3 w-50">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3 w-50">
            <button type="submit" class="btn btn-primary" name="enviar">Iniciar sesión</button>
        </div>
    </form>
</body>
</html>