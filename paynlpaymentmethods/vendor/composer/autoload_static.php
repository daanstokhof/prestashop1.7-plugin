<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3a46c0e362da920ffeb331fe601b182
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '32f17ebede347780b6a8532c66efa6b2' => __DIR__ . '/..' . '/paynl/sdk/src/Resources/functions/text.php',
        '8bbd254920bcfed5fdc4dced6f2d1678' => __DIR__ . '/..' . '/paynl/sdk/src/Resources/functions/vat.php',
        '6be01beb879d85c07e8a87f841449a9e' => __DIR__ . '/..' . '/paynl/sdk/build/guzzle/src/functions_include.php',
        'c37530173b6ef041c79fe6ed076d1446' => __DIR__ . '/..' . '/paynl/sdk/build/promises/src/functions_include.php',
        '4997b541ea6e012b62e7e88fafe5ca88' => __DIR__ . '/..' . '/paynl/sdk/build/psr7/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Hydrator\\' => 14,
            'Zend\\Filter\\' => 12,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Serializer\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PayNL\\Sdk\\' => 10,
            'PayNL\\GuzzleHttp\\Psr7\\' => 22,
            'PayNL\\GuzzleHttp\\Promise\\' => 25,
            'PayNL\\GuzzleHttp\\' => 17,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 28,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Hydrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-hydrator/src',
        ),
        'Zend\\Filter\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-filter/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Serializer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/serializer',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PayNL\\Sdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynl/sdk/src',
        ),
        'PayNL\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynl/sdk/build/psr7/src',
        ),
        'PayNL\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynl/sdk/build/promises/src',
        ),
        'PayNL\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynl/sdk/build/guzzle/src',
        ),
        'Doctrine\\Common\\Collections\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/collections/lib/Doctrine/Common/Collections',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3a46c0e362da920ffeb331fe601b182::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3a46c0e362da920ffeb331fe601b182::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
