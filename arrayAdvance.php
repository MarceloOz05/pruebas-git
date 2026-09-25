<?php
//include "./inforArrays/restaurants.php";
include "infoArrays/restaurants.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array de restaurantes</h1>
    <p>La direccion de Carpacio es:
        <?php
        //<?=$p[1]["employees"][1];   abrevia el php
        echo $p[0]["address"];
        echo "<br>";
        echo $p[1]["employees"][1];

        ?>
    </p>
    <p>
        El numero de bebidas de carpaccio es:
        <?= "<br>" . $p[0]["quantity"]["drinks"]; ?>
    </p>
    <p>
        <?php
        for ($i = 0; $i < count($p); $i++) {
            echo "Nombre: " . $p[$i]["name"] . "<br>";
        }
        echo "<br>";


        foreach ($p as $r) {
            echo "Nombre: " . $r["name"] . "<br>";
        }


        ?>

    <p>Los restaurantes son: </p>
    <ul>
        <?php
        $x = 1;
        foreach ($p as $r) {
            //echo"<li>$x " . $r['name] . "</li>";
            echo "<li> $x {$r['name']}</li>";
            $x++;
        }
        ?>
    </ul>

    <p>Los empleados de ambos restaurantes: </p>
    <?php
    /*Quiero que salga algo como esto (BUCLE)
    Carpaccio: 4, 7, 2
    Luigi: 2, 6, 1*/

    foreach ($p as $r) {
        echo "{$r["name"]}: ";
        if (isset($r['employees'])) {
            /*foreach ($r["employees"] as $e) {
                echo "$e, ";
            }*/
            echo implode(", ", $r["employees"]);
        } else {
            echo "No hay empleados.";
        }
        echo "<br>";
    }
    echo "*************";
    /*Luego en una tabla de html*/
    echo "<table border=1>";

    foreach ($p as $r) {
        echo "<tr>";
        echo "<td>{$r["name"]}: </td>"; // prime celda nombre
        if (isset($r['employees'])) {
            foreach ($r["employees"] as $e) {
                echo "<td>$e</td> "; // celda con employees
            }
        } else {
            echo "<td>" . "No hay empleados." . "</td>";
        }

    }
    echo "</tr>";
    echo "</table>";

        //funcion que recibe un array asociativo, e imprima en una tabla las clavers y el tipo de valor que tiene
        //por ejemplo:
        /*
        clave | tipo
        name  | sting
        adrress | string
        employees   | array
        quanty | array
        */


    function claveYTipos($array): string
    {
        $ret = '<table border ="1">'; // $ret= "table border=\"1\">";
        $ret .= "<tr>
        <th>Nombre</th>
        <th>Tipo</th</tr>";
        foreach ($array as $restaurant) {
            foreach ($restaurant as $key => $value) {
                $ret .= "<tr>
                <td>$key</td>
                <td>" . gettype($value) . "</td>
                </tr>";
            }
        }
        $ret .= "</table"; //$ret = $ret . "</table>";
        return $ret;

    }
    echo claveYTipos($p);



    ?>
    </p>
</body>

</html>