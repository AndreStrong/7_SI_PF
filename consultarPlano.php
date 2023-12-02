<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar plano</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Consulta de un plano</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3"  name = "enviarIdPlano" method="POST">
            <h3 class="text-center text-secondary">Inserte ID de plano para ir a areas de construccion</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese ID de un plano</label>
                <input type="text" class="form-control" name="seleccionPlano">
                <button type="submit" class="btn btn-primary">Seleccionar plano</button>
            </div>
            <?php
                include "modelo/conexion.php";
                include "controlador/seleccionPlano.php";
            ?>
        </form>
        <div class="col-8 p-4">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">origen X</th>
                        <th scope="col">origen Y</th>
                        <th scope="col">origen Z</th>
                        <th scope="col">Ancho</th>
                        <th scope="col">Largo</th>
                        <th scope="col">Alto</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    include "controlador/seleccionPlano.php";
                    while($datos=$sql->fetch_object()){ ?>
                    <tr>
                        <td><?=$datos->IDPlano ?></td>
                        <td><?=$datos->CoordenadaOrigenX ?></td>
                        <td><?=$datos->CoordenadaOrigenY ?></td>
                        <td><?=$datos->CoordenadaOrigenZ ?></td>
                        <td><?=$datos->Largo ?></td>
                        <td><?=$datos->Ancho ?></td>
                        <td><?=$datos->Alto ?></td>
                        <td>
                            <a class="btn btn-small btn-warning" href="">Editar</a>
                            <a class="btn btn-small btn-danger" href="">Eliminar</a>
                        </td>
                    </tr>
                    
                    <?php }
                    ?>
                </tbody>

            </table>
        </div>


    </div>



    <div>
        <form class="col-4 p-3" action="index.php" method="get">
            <button type="submit" class="btn btn-primary">Ir a menu principal</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>