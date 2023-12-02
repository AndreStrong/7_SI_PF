<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto final</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">¡Bienvenido!</h1>
    <h2 class="text-center">
        Seleccione alguna de las siguientes opciones
    </h2>
    <center>
        <div>
            <form class="col-4 p-3" action="consultarPlano.php" method="get">
                <button type="submit" class="btn btn-primary">Consultar plano</button>
            </form>
        </div>
        <div>
            <form class="col-4 p-3" action="ingresarPlano.php" method="get">
                <button type="submit" class="btn btn-primary">Ingresar un nuevo plano</button>
            </form>
        </div>

    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>