<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b11d63e63f6e0f47f7caf4231f2809c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b11d63e63f6e0f47f7caf4231f2809c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b11d63e63f6e0f47f7caf4231f2809c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
