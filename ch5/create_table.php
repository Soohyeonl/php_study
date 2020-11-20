<?php
function create_table($data, $header=null, $caption=null) {
    echo '<table>';
    if ($caption) {
        echo "<caption>$caption</caption>";
    }
    if ($header) {
        echo "<tr><th>$header</th></tr>";
    }
    reset($data);
    $value = current($data);
    while ($value) {
        echo "<tr><td>$value</td></tr>\n";
        $value = next($data);
    }
    echo '</table>';
}

$my_data = ['first piece of data', 'second piece of data', 'and the third'];
$my_header = "Data";
$my_caption = "Data about something";
create_table($my_data, $my_header, $my_caption);
