<?php 

function ComponentAutoloader ($class) {
    $prefix = 'src\Component';
    $baseDir = __DIR__ . '/../../src/Component';
    
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
spl_autoload_register('ComponentAutoloader');