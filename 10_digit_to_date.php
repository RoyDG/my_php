<?php

$column_values = ['1467280800'];

foreach ($column_values as $value) {

    $date = date('Y-m-d', $value);
    echo $date . "\n";
}
