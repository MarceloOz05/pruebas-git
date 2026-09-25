<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array</h1>
    <?php
    $cars = array("Seat", "audi", "BMW");
    $food = ["tomatoes", "avocados", "carrots"];
    //Quiero añadir otra comida:berenjena
    
    $food[3] = "aubergines";

    $food[3] = "eggplants";

    //Quiero añadir al final calabacín
    

    $food[] = "zucchini";


    foreach ($food as $f) {

        echo "$f<br>";
    }


    $food[7] = "cucumbers";
    foreach ($food as $f) {

        echo "$f<br>";
    }


    ?>

    <h2>Arrays asociativos</h2>
    <?php

    $capitals = [

        "Ecuador" => "Quito",
        "Spain" => "Madrid",
        "Norway" => "Oslo"


    ];
    echo "<p> La capital de Noruega es " . $capitals["Norway"] . "</p>";

    //echo "<p> La capital de Noruega es". $capitals[2]. "</p>" esto da error, ya no se puede consultar por index 
    
    echo count($capitals); //3
    echo "<br>";
    
    //Meto un elemneto nuevo: Colombia - Bogota 
    

    $capitals["Colombia"] = "Bogota";
    $capitals["Portugal"] = 49;// PHP permite que se ingresen datos de distintos tipos. 
    
    //meter en ela rray: Georgia - Tbilisi
    $capitals["Georgia"] = "Tbilisi";

    //recorrer array con un foreach
    foreach($capitals as $capital){
        echo $capital . "<br>";
    }

    //recorrer con valores
    foreach($capitals as $country => $capital){
        echo "La capital de $country es $capital <br>";
    }   

    //eliminar un elemento de im arrau asociativo
    unset($capitals["Portugal"]);
    var_dump($capitals);

    if (isset($capitals["Portugal"])){
        echo "La capital de Portugal es " . $capitals["portugal"] . "<br>";
    } else{
        echo "No tengo capital de Portugal";
    }



    ?>

    <h2>Funciones con arrays</h2>
    <?php
        $notas = [9.0, 6.9, 7.5, 8.2];

        //suma de valores
        $suma = array_sum($notas);
        //longitud:
        $numeroDeNotas = count($notas);
        $media = $suma / $numeroDeNotas;    
        // equivale: $media = array_sum($notas) / count($ntoas);

        echo $media;
        var_dump($media);

        //ordenar de menor a mayor
        sort($notas);
        var_dump($notas);  
        // De mayor a menor
        rsort($notas);
        var_dump($notas); 


        //Revolver
        shuffle($notas);
        var_dump($notas);

        //Nota mas alta
        echo "************ <br>";

        sort($notas);
        var_dump($notas);
        echo "La nota mas alta es: " . $notas[count($notas) - 1]. "<br>";
        
        //buscar
        var_dump(in_array(9.0, $notas));
        var_dump(in_array(9.01, $notas));

        //implode: 
        echo implode("," , $notas);

        $nombres= "Juan#Alberto#Maria";
        $arrayNombres = explode("#" , $nombres);
        var_dump($arrayNombres);
        echo $nombres;
        echo"---";

        //Array asociativo:
        //politicos y cargos
        $p=[
            "Pedro" => "Presidente",
            "Pilar" => "Educacion",
            "Oscar" => "Transporte",
            "Fernando" => "Interiro"

        ];
        var_dump($p);

        //echo "indexado ";
        //sort($p); //Si hago esto en un asociativo, elimino las claves y lo convierto en indexado
        var_dump($p);

        //por valor ascendente:
        asort($p);
        var_dump($p);
        //por valor descendientes (reverse):
        arsort($p);
        var_dump($p);

        //Por clave ascendente:
        ksort($p);
        var_dump($p);
        
        
        krsort($p);
        var_dump($p);
        

        foreach($p as $k => $vr){
            echo $k . " ";
        }

        $claves = array_keys($p);
        var_dump($claves);
        echo implode(", ", array_keys($p));

        // en que posicion esta un elemento
        $resultado = array_search("Presidente", $p);
        var_dump($resultado);



    ?>




</body>

</html>