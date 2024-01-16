<?php
    // espongo la media di due valori inseriti dall'utente con chiamata GET
    $media = 0;

    if(isset($_GET['a']) && isset($_GET['b']) ) {
        $media = ($_GET['a'] + $_GET['b']) / 2;
    }

    header('Content-Type: application/json');
    echo json_encode($media);

?>