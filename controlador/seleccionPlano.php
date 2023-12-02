<?php
    if(!empty($_POST["seleccionPlano"])){
        $idPlano = $_POST["seleccionPlano"];
        $sql=$conexion->query(" select * from  planos where IDPlano = $idPlano");
        

    }else{
        echo "No se ha ingresado ningun valor";
        $idPlano = 0;
        $sql=$conexion->query(" select * from  planos");
    }
?>