<?php

$archivo = file('C:\Users\karina\Desktop\Archivos\archivo.txt');

foreach ($archivo as $linea) {
    echo $linea. '<br>';
}