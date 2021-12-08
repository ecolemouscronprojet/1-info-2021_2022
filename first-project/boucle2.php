<?php
echo '<div style="text-align:center;color: green;font-weight: bold">';
for ($i = 1; $i <= 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '</div>';
