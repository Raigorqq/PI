<?php
echo "<fieldset>
        <table>
        <caption>Таблица за умножение</caption>";

for($i = 1; $i <= 10; $i = $i + 1){
    echo "<tr>";
    for($j = 1; $j <= 10; $j = $j +1) {
        $number =$i * $j;

        echo "<th> $number </th>";
    }

    echo "</tr>";
}

echo "</table>
        </fieldset>";
?>

