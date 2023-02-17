<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion calculos</title>
    <style>
    body {
            width: 80%;
            background-color: black;
            color: white;
            text-align: center;
            margin: auto;
            font-size: large;
        }
        button{
            background-color: aqua;
        }
        spam{
            color: aqua;
            border: solid 1px aqua;
            padding: 2px;
        }
        </style>
</head>
<body>
    <h1>Funcion calculos</h1>
    <p>Escribir un programa en PHP que cargue un array de 50 elementos con números al azar entre 1 y 1000,
         y que no se repitan. Luego deberá armar una función que se llame Calculos que devolverá 
         los dos mayores números generados, los dos menores números generados y
          el promedio de todos los números del array.
         Fuera de la función, es decir en el script principal de PHP, deberá imprimir esos cinco valores.</p>

         <form action="Funcion_calculos.php" method="get">
  <button type="submit" name="actualizar">Actualizar</button>
  </form>



<?php
if(isset($_GET["actualizar"])){
/*esta funcion genera ubn array simple si repeticiones y lo retorna*/
function array_sin_rep(){
$aux=0;
$array_simple=array();
echo "<br>ARRAY ORIGINAL <br>(no lo pide el enunciado)<br><br>";
for ($e = 1; $e <= 50; $e++){
      $aux=rand(0,1000);
     while (in_array($aux,$array_simple)){
        $aux=rand(0,1000);
      }
      $array_simple[$e]=$aux;
      echo $aux . "   -  ";
    }
return $array_simple;
}
$array1= array_sin_rep();


function Calculos($array1){
    $con=0;
    $sumatoria=0;
foreach($array1 as $num){
$sumatoria=$sumatoria+$num;
$con++;
}

$prom=$sumatoria/$con;
$aux1=$array1;
$aux2=$array1;   

$mayor1=max($aux1);
$clave=array_search($mayor1,$aux1);
unset($aux1[$clave]);
$mayor2=max($aux1);


$menor1=min($aux2);
$clave1=array_search($menor1,$aux2);
unset($aux2[$clave1]);
$menor2=min($aux2);


return " <br>Los dos mayoras son <spam> $mayor1 y $mayor2 </spam> <br> <br>Los dos menores son <spam> $menor1 y $menor2 </spam> <br><br> El promedio es <spam> $prom </spam> ";



}
echo "<br><br>";
echo Calculos($array1);

}
?>
</body>
</html>