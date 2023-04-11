<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27144691cba66ad70bfd198bdc3c144e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Protocols\\' => 10,
            'Products\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Protocols\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Protocols',
        ),
        'Products\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Products',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27144691cba66ad70bfd198bdc3c144e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27144691cba66ad70bfd198bdc3c144e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
