<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6e480b7a1510d405613660c31382f3f
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flower\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flower\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6e480b7a1510d405613660c31382f3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6e480b7a1510d405613660c31382f3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
