<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        .cuadro {
            width: 500px;
            background-color: #f2f2f2;
            border: 1px solid #f87dcf;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border-radius: 15px;
            color:#f87dcf;
        }
        </style> -->
</head>
<body>
    <!-- <div class="cuadro"> -->
    <p>Milagros Camila <br> <b>Churata Ordoñez</b></p>
    <!-- etiquetas php -->
    <?php
        echo "Imprimiendo en PHP";
        $num1 = 1;
        $num2 = 100;
        echo "<br>Suma: ". ($num1 + $num2);
        echo "<br>Incremento: ". ($num1 + 1);
        if ($num2==2){
            echo "<br>El número no es igual";
        }else if ($num2==100){
            echo "<br>El número es igual";
        }
        // Declarar 7 tipos de datos
        // $string = "Milagros Camila Churata Ordoñez";
        // $integer = 101;
        // $float = 101.5;
        // $boolean = true;
        // $array = array(1, 2, 3, 4, 5);
        // $variable_sin_valor = null;
        // $objet->apellido = "Ordoñez";
        $array = array("1", "2", "3", "4", "5");
        $nombre = ["Mar","Rey","Eli"];
        foreach ($nombre as $nom){
        echo "<br>". $nom;
    }
        //tabla del 1 al 12
        $numeros = range (1,12);
        echo "<table border = '1' cellpadding = '5' cellspacing='0'>";
        foreach ($numeros as $columna) {
            echo "<th>$columna</th>";
        }
        echo "</tr>";
        foreach ($numeros as $fila) {
            echo "<tr><th>$columna</th>";
                foreach($numeros as $columna){
                  $resultado = $fila * $columna;
                echo "<td>$resultado</td>";
            }
            echo "</tr>";
        }
        ?>
       
</body>
</html>