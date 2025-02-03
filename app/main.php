<?php
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '/':
            echo "Página inicial";
            break;
        case '/tasks':
            echo "Página sobre";
            break;
        default:
            echo "Página não encontrada";
            break;
    }
?>