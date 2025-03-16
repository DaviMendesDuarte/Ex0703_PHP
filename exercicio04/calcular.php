<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $alt = $n1 * $n1;
    $res = $n2 / $alt; 

    if ($res <= 18.5)
    {
        echo "Você está abaixo do peso";
    }
    else if ($res > 18.5 && 24.9)
    {
        echo "Você está com o peso ideal";
    }
    else if ($res > 25 && 29.9)
    {
        echo "Você está sobrepeso";
    }
    else if ($res > 30 && 34.9)
    {
        echo "Você está com obesidade grau I";
    }
    else if ($res > 35 && 39.9)
    {
        echo "Você está com obesidade grau II";
    }
    else if ($res > 40)
    {
        echo "Você está com obesidade grau III";
    }
?>