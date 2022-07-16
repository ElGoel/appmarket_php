<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function isLast(string $actual, string $ultimo): bool {
    if($actual !== $ultimo) {
        return true;
    }
    return false;
}

// Funcion que revisa qwue el usuario este autenticado 

function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isAdmin(): void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}