<!DOCTYPE html>
<html lang="en">

/*
Explicación y Documentación del Código HTML
Este código HTML crea una página web que contiene dos formularios: uno para registrar votantes y otro para consultar la mesa de votación de un votante. Aquí está una explicación detallada y documentada de cada sección del código:
*/

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <title>Project</title>
</head>

<body>
    <main>
        <div class="login">//definimos  el contenedor
            <form action="registrar.php" method="post"> //define los datos que se enviaran al utilizar el registro
                <h1>Registro de Votantes</h1>
                <label for="">Cédula:</label>
                <input type="text" name="cedula" placeholder="Introduzca su Cedula" required /><br />
                <i class="fa-solid"></i><label for="">Nombre:</label>
                <input type="text" name="nombre" placeholder="Introduzca su Nombre" required /><br />
                <label for="">Apellido:</label> 
                <input type="text" name="apellido" placeholder="Introduzca su Apellido"required /><br />
                <label for="">Centro de Votación: </label>
                <input type="text" name="centrovotacion" placeholder="Lugar de votacion" required /><br />
                <label for="">Número de Mesa:</label>
                <input type="number" name="numeromesa" placeholder="Numero de mesa" required /><br />
                <input type="submit" name="signUP" value="Registrar" />
            </form>
        </div>

<script>

</script>
       
        <form action="consultar.php" method="post">
             <h1>Consulta de Mesa de Votación</h1>
            <label for="">Cédula:</label><input type="text" name="cedula" required /><br />
            <input type="submit" value="Consultar" />
        </form>
    </main>
</body>
<style>

</style>

</html>
