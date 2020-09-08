<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59f1ca51c863e3905498c7113ebe6673
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59f1ca51c863e3905498c7113ebe6673::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59f1ca51c863e3905498c7113ebe6673::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
