<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de construccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Area de construccion</h1>

    <div class="container-fluid row">
        <form class="col-3 p-3" method="POST">
            <h3 class="text-center text-secondary">Ingrese las coordenadas de construccion</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordenada inicial X</label>
                <input type="text" class="form-control" name="inicialX">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordenada inicial Y</label>
                <input type="text" class="form-control" name="inicialY">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordenada inicial Z</label>
                <input type="text" class="form-control" name="inicialZ">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordenada final X</label>
                <input type="text" class="form-control" name="finalX">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordenada final Y</label>
                <input type="text" class="form-control" name="finalY">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordenada final Z</label>
                <input type="text" class="form-control" name="finalZ">
            </div>

            <button type="submit" class="btn btn-primary" name="registroConstruccion">Registrar este plano</button>

        </form>

        <div class="col-8 p-4">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">#IDPlano</th>
                        <th scope="col">Inicial X</th>
                        <th scope="col">Inicial Y</th>
                        <th scope="col">Inicial Z</th>
                        <th scope="col">Final X</th>
                        <th scope="col">Final Y</th>
                        <th scope="col">Final Z</th>
                        <th scope="col">Codigo en juego</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    
                    $sql=$conexion->query(" select * from  areaconstruccion where {$idPlano}");
                    while($datos=$sql->fetch_object()){ ?>
                    <tr>
                        <td><?=$datos->IDAreaConstruccion ?></td>
                        <td><?=$datos->IDPlano ?></td>
                        <td><?=$datos->CoordenadaInicialX ?></td>
                        <td><?=$datos->CoordenadaInicialY ?></td>
                        <td><?=$datos->CoordenadaInicialZ ?></td>
                        <td><?=$datos->CoordenadaFinalX ?></td>
                        <td><?=$datos->CoordenadaFinalY ?></td>
                        <td><?=$datos->CoordenadaFinalZ ?></td>
                        <td><?=$datos->CodigoJuego ?></td>
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