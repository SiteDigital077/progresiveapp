<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68879f983c772743fe4f0cfdfbbf185f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Digitalsitesaas\\Progresiveapp\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Digitalsitesaas\\Progresiveapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68879f983c772743fe4f0cfdfbbf185f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68879f983c772743fe4f0cfdfbbf185f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68879f983c772743fe4f0cfdfbbf185f::$classMap;

        }, null, ClassLoader::class);
    }
}