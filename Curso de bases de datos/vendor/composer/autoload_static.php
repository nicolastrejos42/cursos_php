<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0a617faf534389f067693bdcb5e82a2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0a617faf534389f067693bdcb5e82a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0a617faf534389f067693bdcb5e82a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0a617faf534389f067693bdcb5e82a2::$classMap;

        }, null, ClassLoader::class);
    }
}