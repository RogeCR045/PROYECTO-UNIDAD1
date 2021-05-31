<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?php

$archivo = file('C:\Users\karina\Desktop\texto.txt');

echo count($archivo). '<br>';

echo '
    <div class="row">
     <div class="col-2"></div>
     <div class="col-8" align="center">
     <div class="card">
     <div class="card-header"> Contenido del archivo ('.count($archivo).' lineas)</div>
     <div class="card-body text-justify">
';
foreach ($archivo as $linea) 
      {
         echo 
         $linea. 
         '<br>';

      }

      echo '</div></div></div><div class="col-2"></div></div>';
