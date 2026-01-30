<?php
// Inicialização do sistema
require_once __DIR__ . '/url-config.php';
//require_once __DIR__ . '/db.php';

// Funções auxiliares podem ser adicionadas aqui
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
