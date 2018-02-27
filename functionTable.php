<?php
/**
 * Created by PhpStorm.
 * User: soarebianca
 * Date: 21/11/2017
 * Time: 15:14
 */


/**
 * am creat o functie cu numele write_table, care primeste ca parametri $m=nr randuri, $n=nr coloane
 * si afiseaza un tabel m randuri si n coloane.
 * in interiorul celulelor am pus ($i,$j).
 */

// functie tabel cu for in for
echo "<h3>table</h3>";
function writeTable($m, $n)
{
    $tabel = '<table border="5" >';
    for ($i=1; $i<=$m; $i++)
    {
        $tabel .= '<tr>';
        for($j=1; $j<=$n; $j++)
        {
            if ($j%2 == 0)
            {
                $color = "#ff0000";
            } else {
                $color = "#ffc0cb";
            }
            $tabel .= "<td width='50' height='30' style=\"background-color: $color\">$i$j</td>";
        }
        $tabel .= "</tr>";
    }
    $tabel .= "</table>";
    return $tabel;
}

echo writeTable(5,5);



// functie tabel cu while in for
/*
function write_table($m, $n)
{
  $tabel = "<table border='1'>";
  for ($i=1; $i<=$m; $i++)
  {
    $tabel .= "<tr>";
    $j = 1;
      while ($j <= $n)
      {
        $tabel .= "<td>$i$j</td>";
        $j++;
      }
    $tabel .= "</tr>";
  }
  $tabel .= "<table>";
  return $tabel;
}

echo write_table(5,5);
*/

