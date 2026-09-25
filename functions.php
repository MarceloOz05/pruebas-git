

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Funciones :)</h1>

    <?php
    
    //funcion que reciba un array de notas y devuelve la cantidad de personas aprobadas 
     //public int aprobada(notas[]{})
      function aprobadas($notas):int{
      
      $apr=0;
      foreach($notas as $n)
        if($n >= 5)
          {
            $apr++;
          }
        return $apr;
      
      }
     
      echo aprobadas([9.0,4,2,9]);

      //función que reciba dos strings y devuelva la concatenacion de los dos. 

        echo "<br>";

      function unir($text,$text2)
      {
          return $text.$text2;
          
      }
       echo unir("Hola","Mundo");



       //Parámetro con valores por defecto
       //saludar: si recibe un parámetro (el nombre:xxx), que devuelva "Hola,xxxxx":
       //saludar: si recibe dos parámetros (nombre: xxxxx y saludo:yyyy), que devuelva "YYY , XXXX"


       function saludar($name,$saludo="Hola"):string{

             return "$saludo, $name";
       }

       echo "<br>";
       echo saludar("juan");//Hola Juan. 
       echo "<br>";
       echo saludar("juan","Buenos dias");//Buenos dias, Juan 
       

       //FUncion que reciba un array indexado de numeros, y un segundo parámetro de tipo bool
       //si es true, que lo devuelva de mayor a menor 
       //si es false o no existe, que devuelva ordenado de menor a mayor


       function ordenar($nums,$ord=false):array{
       
         if ($ord){

            rsort($nums);
         }else{
            asort($nums);
         }
        return $nums;

       }

       var_dump(ordenar([9.0,4,2,9],true));
       var_dump(ordenar([9.0,4,2,9],false));
       var_dump(ordenar([9.0,4,2,9]));
      // funcion que recibe una cantidad indeterminada de numero y devuelve la suma de todos ellos 

      function suma(...$nums){

      return array_sum($nums);
      }

      echo suma(1,2,3);
      echo "<br>";
      echo suma(1,2,3,4,5);
      echo "<br>";

      include("f.php");
      echo "---COMPARADOR--". "<br>";
      echo comparar("hol","adios");

     ?>
</body>
</html>

