<?php
// task 1 - serie de  Fibonacci
echo '<br>';
echo 'Serie de fibonacci';
echo '<br>';
$fibonacci = 8;
$numeros = [0,1];
for ($i=2 ; $i < $fibonacci  ; $i++) { 
     $numeros[$i] = $numeros[$i - 2] + $numeros[$i - 1];
     echo ' '. $numeros[$i]. ' |';
}

// task 2 - invertir string
echo '<br>';
echo 'Invertir cadena string ';
echo '<br>';
$texto = 'Alejandro';
$vacio = '';

for ($i = 1; $i <= strlen($texto) ; $i++) { 
    $vacio =  $texto[-$i];
    echo ' '.$vacio;
}

 echo '<br>';
 echo 'Multiplicacion sin operador';
 echo '<br>';

//task 3 - multiplicacion

$n1 = 5;
$n2 = 6;
$resultado = 0;
for ($i=1; $i <= $n1 ; $i++) { 
      $resultado =$resultado + $n2 ;
}
echo $resultado;

echo '<br>';
echo 'Separacion y suma de numeros primos ';
echo '<br>';

//task 4 - numeros primos

$array =  [
    1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,
    29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,
    52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,
    75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,
    98,99,100];

$res= 0 ;
for ($i=1; $i <=count($array) ; $i++) { 
    if (primo($i)) {
        $res +=  $i;
       
    }
}
function primo($num){
     $contador = 0;
     for ($i=1; $i <=$num ; $i++) {
        if ($num%$i==0) {
            $contador = $contador +1;
        }
     }
     if ($contador==2) {
        return true ;
     }else {
        return false;
     }
}

echo '' .$res. '<br>';




