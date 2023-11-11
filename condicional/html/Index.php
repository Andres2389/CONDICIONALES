<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos.css">
    <title>formulario</title>
</head>
<body>
    <h1>formulario de conctato</h1>
    <form action=""  method ="post">
        <label for="nombre" >nombre</label>
        <input type="text" id= "nombre" name="nombre" required >
        <label for="email" >email:</label>
        <input type="email" id="email" name="email" required >
        <label for="telefono">telefono</label>
        <input type="telefono" id="telefono" name="telefono">
        <input type="submit" value="enviar">
        <button><a href="mostrar.php">mostrar datos</a></button>

    </form>
</body>
</html>