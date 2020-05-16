<?php
    if (isset($_POST["txtcantidad"])) {
        $cantidad = $_POST["txtcantidad"];

        # crear el formulario
        echo '
        <h1>Determinar el promedio de las notas.</h1>
        <hr>';
            $suma = 0;
            echo "Notas:<br>";
            #estructura for
            for ($i=1; $i <= $cantidad; $i++) { 
                echo 'Notas'.$i.': '.$_POST["txtnota$i"].'<br>';
                # cuerpo del formulario
                $suma = $suma + $_POST["txtnota$i"];
            }

            $promedio = $suma / $cantidad;

        echo "<h2>El promedio de las notas es: $promedio</h2>";
        # volver al inicio
        echo '<a href="index.php">Calcular nuevamente...</a>';
    } else {
        # volver al inicio
        echo '<a href="ejercicio3.php">Debe enviar la cantidad de estudiantes...</a>';
    }
    
?>