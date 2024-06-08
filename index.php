<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$database = "macro";

$vinculo = mysqli_connect($servidor, $usuario, $contraseña, $database);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
</head>
<body>
    <form action="#" method="post">

    <h1 id="encabezado_principal">Registrate</h1>
      
    <label>Nombre</label>
    <input type="text" name="nombre" placeholder="Introduce tu nombre...">

    <label>Email</label>
    <input type="email" name="email" placeholder="Introduce tu email...">

    <label>Contraseña</label>
    <input type="password" name="contraseña" placeholder="Introduce tu contraseña...">

    <label>Telefono</label>
    <input type="tel" name="telefono" placeholder="Introduce tu telefono..">

    <input type="submit" name="registrate" value="Registrate">

    </form>

<?php

if(isset($_POST['registrate'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];

    $introducir_datos = "INSERT INTO datos VALUES('$nombre', '$email', '$contraseña', '$telefono', '')";
}
else{
    echo "Error" . $introducir_datos . "<br>" . mysqli_error($vinculo);
}

mysqli_close($vinculo);

?>

</body>
</html>
