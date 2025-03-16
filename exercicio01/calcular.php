<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ($n1 > $n2)
    {
        echo "O número ".$n1." é maior que o número ".$n2;
    }
    else
    {
        echo "O número ".$n2." é maior que o número ".$n1;
    }
?>