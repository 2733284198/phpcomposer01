<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57e93e18da73ace44724916377b45da7
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tlanyan\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tlanyan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57e93e18da73ace44724916377b45da7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57e93e18da73ace44724916377b45da7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
