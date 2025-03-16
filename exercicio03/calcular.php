<?php
    $sal = $_POST['n1'];
    $fi = $_POST['n2'];

    if ($sal <= 800)
    {
        $sal = $sal * 1.3;
    }

    if ($fi > 1)
    {
        $sal = $sal + ($fi * 90);
    }

    echo "O salário final foi de R$".$sal;
?>