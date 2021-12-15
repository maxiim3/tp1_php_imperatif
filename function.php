<?php
/**
 * @param $n
 * @return void
 * TP 1.1 -> la valeure par defaut sera 9.
 * TP 1.2 -> Si on passe une valeure en parametre, la fonction retournera nxn.
 */

function tableDeMultiplication($n=9)
{
    echo '<table>';
    for ($row=0; $row<$n+1; $row++){
        echo '<tr>';
        for ($col =0; $col < $n+1; $col++){
            if ($col===0 && $row === 0 ) {
                echo '<td></td>';
            } elseif ($row === 0){
                echo "<td class = 'initial'>$col</td>";
            } elseif ($col === 0) {
                echo "<td class = 'initial'>$row</td>";
            } else {
                echo (($row==$col) ? "<td class = \"special\">" : '<td>'). $col*$row .'</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}