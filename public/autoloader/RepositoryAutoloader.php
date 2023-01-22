<?php 

function RepositoryAutoloader ($class) {
    $prefix = 'src\Repository';
    $baseDir = __DIR__ . '/../../src/Repository';
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register('RepositoryAutoloader');