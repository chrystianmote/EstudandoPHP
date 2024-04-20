<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ac5f8cc1004d653da6df64445bba7f4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ac5f8cc1004d653da6df64445bba7f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ac5f8cc1004d653da6df64445bba7f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ac5f8cc1004d653da6df64445bba7f4::$classMap;

        }, null, ClassLoader::class);
    }
}