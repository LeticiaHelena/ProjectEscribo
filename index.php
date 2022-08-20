<?php

echo "Insira um valor inteiro e positivo: ";
$value = (integer) fgets(STDIN);

echo "O valor de saída é: \n";
echo somatoria($value);

function somatoria($value){

    $result = 0;

    for($i = 0; $i < $value; $i++) {

        if(gettype($value) !== 'integer'){

            return "É aceitável apenas números inteiros";

        }

        if(($i % 3 == 0 || $i % 5 == 0)){

            $result += $i;

        }

    }


    return $result;

}

