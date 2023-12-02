<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar plano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Ingresar un plano nuevo</h1>
    <center>
        <div class="container-fluid">
            <form class="col-3 p-3" method="POST">
                <h3 class="text-center text-secondary">Ingrese las coordenadas de origen</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Origen X</label>
                    <input type="text" class="form-control" name="origenX">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Origen Y</label>
                    <input type="text" class="form-control" name="origenY">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Origen Z</label>
                    <input type="text" class="form-control" name="origenZ">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Largo</label>
                    <input type="text" class="form-control" name="largo">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alto</label>
                    <input type="text" class="form-control" name="alto">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ancho</label>
                    <input type="text" class="form-control" name="ancho">
                </div>
                <button type="submit" class="btn btn-primary">Registrar este plano</button>
            </form>
            <?php
                include "modelo/conexion.php";
                include "controlador/insertarPlano.php";
                
            ?>



        </div>

    </center>

    <div class="container-fluid row ">
        <form class="col-4 p-3" action="index.php" method="get">
            <button type="submit" class="btn btn-primary">Ir a menu principal</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>