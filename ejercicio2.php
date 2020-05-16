<?php

$nombre = "";
$moneda = "";
$idioma = "";
$continente ="";


#comprobar si se envio el pais
if (isset($_POST["txtpais"])) {
    
    
    $pais = $_POST["txtpais"];
    
    if ($pais == 'España') {
        # asignar el pais
        $nombre ="Nombre: España <hr> ";
        $moneda="Moneda:  Euro <hr>";
        $idioma ="Idioma:  Español, Gallego, Vasco, Valenciano <hr>";
        $continente = "Continente: Europeo";


    }elseif ($pais == 'Brazil') {
        # asignar el pais
        $nombre ="Nombre: Brasil <hr> ";
        $moneda="Moneda:  Real <hr>";
        $idioma ="Idioma:  Portugues <hr>";
        $continente = "Continente: America";
        

    
    
}elseif ($pais == 'Mexico') {
    # asignar el pais
    $nombre ="Nombre: Mexico <hr> ";
    $moneda="Moneda:  Peso mexicano <hr>";
    $idioma ="Idioma:  Español  <hr>";
    $continente = "Continente: America";
    



}elseif ($pais == 'Colombia') {
    # asignar el pais
    $nombre ="Nombre: Colombia <hr> ";
    $moneda="Moneda:  Peso colombiano <hr>";
    $idioma ="Idioma:  Español <hr>";
    $continente = "Continente: America";
    



}elseif ($pais == 'Italia') {
    # asignar el pais
    $nombre ="Nombre: Italia <hr> ";
    $moneda="Moneda:  Euro <hr>";
    $idioma ="Idioma:  italiano <hr>";
    $continente = "Continente: Europeo";
    

}
   
    
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>
<body>
    <h2>Mostrar un listado de 5 paìses y que muestre nombre, idioma, moneda y continente</h2>
    <hr>
    <form action="ejercicio2.php" method="post">
       
        <input type="radio" name="txtpais" id="" value="España"> España
        <input type="radio" name="txtpais" id="" value="Brazil"> Brasíl
        <input type="radio" name="txtpais" id="" value="Mexico"> Mexico
        <input type="radio" name="txtpais" id="" value="Colombia"> Colombia
        <input type="radio" name="txtpais" id="" value="Italia"> Italia
        <hr>
        <input type="submit" value="Mostrar">
        <br>
        <hr>

    </form>

</body>
</html>


<?php
    echo "Informacion: <hr> $nombre $moneda $idioma $continente";
?>