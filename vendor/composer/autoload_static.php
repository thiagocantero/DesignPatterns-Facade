<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74b9c2325b2463807e0652d386c26c3c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPatterns\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DesignPatterns\\ConversorAVI' => __DIR__ . '/../..' . '/src/ConversorAVI.php',
        'DesignPatterns\\ConversorMP4' => __DIR__ . '/../..' . '/src/ConversorMP4.php',
        'DesignPatterns\\FacadePattern' => __DIR__ . '/../..' . '/src/FacadePattern.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74b9c2325b2463807e0652d386c26c3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74b9c2325b2463807e0652d386c26c3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74b9c2325b2463807e0652d386c26c3c::$classMap;

        }, null, ClassLoader::class);
    }
}
