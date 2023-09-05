<?php

$column_values = ['19700101', '19700112'];

foreach ($column_values as $value) {
    $date = DateTime::createFromFormat('Ymd', $value);
    echo $date->format('Y-m-d') . "\n";
}
