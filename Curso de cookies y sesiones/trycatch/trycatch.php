<?php


try {

    $resultado = 20/0 ;
    echo $resultado;

} catch (Throwable $e) {
    
    echo 'Ups, algo salió mal con tu división';
}

echo '<br>';

echo 'Esto pasa si o si';