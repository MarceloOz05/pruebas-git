<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>
    <p>La siguiente linea esta hecha con PHP:</p>
    <?php
    echo "<p> Hello World! </p>";
    ?>
    <!-- Comentario HTML -->


    <p>Esta linea también:</p>
    <p>
        <?php
        echo "Hola mundo.";
        echo "<br>";
        print "otra cosa";
        echo "<br>";
        echo ("otra mas");
        echo "<br>";

        // VARIABLES:
        /* Comentario de varias lineas */
        // String:
        // String name= "aasdf";
        $name = "Sete";

        $surname = 'ruiz';
        echo "<br>";
        echo "Este es el nombre:";
        echo "<br>";
        echo $name;
        echo "<br>";
        echo "Este nombre y apellido";
        echo "<br>";
        //concatenar string:
        echo $name . " " . $surname;
        echo "<br>";
        echo "$name $surname"; // Si interpreta variables
        echo "<br>";
        echo "Esto no es valido&#10;";
        echo '$name $surname'; //No interpreta variables
        echo "<br>";

        //numericas
        $age = 21;
        echo "<p> Tengo $age años </p>";
        var_dump($age);
        //Las variables pueden cambiar de tipo
        $age = 2.3;
        var_dump($age);
        $age = "3423qer";
        var_dump($age);
        $age = false;
        var_dump($age);
        $age = null;
        var_dump($age);

        //CONSTANTES: dos formas: define o const
        define("IVA_GENERAL", 0.21);
        const IVA_REDUCIDO = 0.08;
        $precio = 20.3;
        echo "<p> El IVa es: " . $precio * IVA_GENERAL . "</p>";
        echo "<p> El precio final con IVA es: " . $precio + $precio * IVA_REDUCIDO . "</p>";
        echo "<p> El precio final con IVA es: " . $precio + $precio * IVA_REDUCIDO . "</p>";

        var_dump(PHP_VERSION);

        var_dump(__FILE__);
        var_dump(__LINE__);

        $price = 29.3;

        //OPERADOR NUEVOS
        
        $a = 5;
        $b = $a ** 10; // 5 elevado a 10.
        var_dump($b);

        $a = 7;
        $mod = $a % 2; // 1(resto de la division entera)
        var_dump($mod);
        $a = 11;
        $mod = $a % 4; // 3
        var_dump($mod);

        //OPERADORES DE INCREMENTO
        $a = 1;
        $a++; //$a = $a +1;
        $a += 4; //$a= $a + 4;
        
        


        ?>


    </p>

</body>

</html>