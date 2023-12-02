<?php 
    if(!empty($_POST["origenX"]) and !empty($_POST["origenY"]) and !empty($_POST["origenZ"]) and !empty($_POST["ancho"]) and !empty($_POST["alto"]) and !empty($_POST["largo"])){
        $vOrigenX = intval($_POST["origenX"]);
        $vOrigenY = intval($_POST["origenY"]);
        $vOrigenZ = intval($_POST["origenZ"]);
        $vAncho = intval($_POST["ancho"]);
        $vAlto = intval($_POST["alto"]);
        $vLargo = intval($_POST["largo"]);

        $sql=$conexion->query("INSERT INTO Planos (CoordenadaOrigenX, CoordenadaOrigenY, CoordenadaOrigenZ, Largo, Ancho, Alto)
        VALUES ($vOrigenX, $vOrigenY, $vOrigenZ, $vLargo, $vAncho, $vAlto);");
        
        echo "Se ha registrado un nuevo plano";
    } else {
        echo "Rellenar todos los campos";
    }
?>
