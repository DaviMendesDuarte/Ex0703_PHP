<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $soma = $n1 + $n2 + $n3 + $n4;
    $med = $soma / 4;

    if ($med > 5)
    {
        echo "Você está aprovado!";
    }
    else
    {
        echo "Você está reprovado!";
    }
?>