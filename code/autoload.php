<?php
function autoload(string $className): void
{
    if (file_exists('Handler/' . $className . '.php')) {
        require_once 'Handler/' . $className . '.php';
    } elseif (file_exists('Config/' . $className . '.php')) {
        require_once 'Config/' . $className . '.php';
    } elseif (file_exists('Model/' . $className . '.php')) {
        require_once 'Model/' . $className . '.php';
    } elseif (file_exists('Repository/' . $className . '.php')) {
        require_once 'Repository/' . $className . '.php';
    } elseif (file_exists('View/' . $className . '.php')) {
        require_once 'View/' . $className . '.php';
    }
}

spl_autoload_register('autoload');
?>