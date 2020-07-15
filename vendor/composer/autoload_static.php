<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cc7778c98d60f7e0fedffa485c3cc0c
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '1f60d56c465c7131982bcd3aa7140afc' => __DIR__ . '/..' . '/rafaelnery/phputils/src/functions/debug.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHP\\' => 4,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'D' => 
        array (
            'DAO\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/rafaelnery/phputils/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'DAO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/dao',
        ),
    );

    public static $classMap = array (
        'SqlFormatter' => __DIR__ . '/..' . '/jdorn/sql-formatter/lib/SqlFormatter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cc7778c98d60f7e0fedffa485c3cc0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cc7778c98d60f7e0fedffa485c3cc0c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0cc7778c98d60f7e0fedffa485c3cc0c::$classMap;

        }, null, ClassLoader::class);
    }
}