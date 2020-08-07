<%php

$num = 0;

echo "Digite um numero: " . PHP_EOL;

$num = readline($num);

if ($num % 2 == 0){

    echo "O numero é par.";

} else {

      echo "O numero é impar";
}