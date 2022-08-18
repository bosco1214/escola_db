<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7102129ecc92f5ac30fbfa0453339ad5
{
    public static $files = array (
        '0a48533c15a019925ea8a1fd3de6cd79' => __DIR__ . '/../..' . '/app/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7102129ecc92f5ac30fbfa0453339ad5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7102129ecc92f5ac30fbfa0453339ad5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7102129ecc92f5ac30fbfa0453339ad5::$classMap;

        }, null, ClassLoader::class);
    }
}
