<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Leaf\\Http\\' => array($vendorDir . '/leafs/http/src', $vendorDir . '/leafs/cors/src'),
    'Leaf\\' => array($vendorDir . '/leafs/anchor/src', $vendorDir . '/leafs/db/src', $vendorDir . '/leafs/exception/src', $vendorDir . '/leafs/leaf/src', $vendorDir . '/leafs/router/src'),
);
