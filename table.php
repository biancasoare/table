<?php

/**
 * folosind un ciclu for si un ciclu while am generat un tabel cu $m randuri si $n coloane.
 * astfel ciclul for: va scrie tagurile pentru randuri,
 * iar ciclul while: va scrie tagurile pentru celule
 */

echo "<h3>table</h3>";
//randuri
$m = 6;
//coloane
$n = 8 ;
$tabel = '<table border="1" style="width: 50%; border: 5px dotted black;">';
for ($i=1; $i<=$m; $i++)
{
    if ($i%2 == 0)
    {
        $culoare = "#87CEFA";
    } else{
        $culoare = "#dddddd";
    }
    $tabel .= "<tr style='background-color: ".$culoare."'>";
    $j = 1;
    while ($j<=$n)
    {
        $tabel .= "<td>$i$j</td>";
        $j++;
    }
}
$tabel .= "</table>";

echo $tabel;