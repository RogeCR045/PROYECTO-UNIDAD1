    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <?php

    define('CSV', 'C:\Users\karina\Desktop\RESULTADOS_ENCUESTA_VAK (1).csv');
    $content = array_map('str_getcsv', file(CSV));
    ?>
    <div class="container">
        <h3>Contenido de lectura CSV</h3>

        <br><br><br>
        <div class="jumbotron">

    <table class="table table-responsive table-bordered mary">
        <?php
        foreach ($content as $row) {
            echo '<tr>';
                foreach ($row as $data) {
                    echo '<td>'.$data.'</td>';
                }
                echo '</tr>';
        }
        ?>
    </table>
</div>
</div>
