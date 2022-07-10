<?php

$altura = 1.78;
$peso = 80;
$imc = round($peso / $altura ** 2, 2);

if($imc <18.5){
    $status = 'Magreza';
}elseif ($imc >= 18.5 and $imc <24.9){
    $status = 'Normal';
}elseif ($imc >= 24.9 and $imc <29.9){
    $status = 'Sobrepeso';
}elseif ($imc >= 29.9 and $imc <39.9){
    $status = 'Obesidade';
}elseif ($imc >= 39.9){
    $status = 'Obesidade Grave';
}

echo "Seu Peso: $peso kg\nSua Altura: $altura cm\nSeu IMC é $imc e a classificação é $status";
