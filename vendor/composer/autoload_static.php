<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0db46547ab927d9ca5f7a22f40c00729
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0db46547ab927d9ca5f7a22f40c00729::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0db46547ab927d9ca5f7a22f40c00729::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
