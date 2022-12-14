<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ad9912d6ab6bc39ff4c2c84f3c65dd2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Serph\\Notas\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Serph\\Notas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ad9912d6ab6bc39ff4c2c84f3c65dd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ad9912d6ab6bc39ff4c2c84f3c65dd2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ad9912d6ab6bc39ff4c2c84f3c65dd2::$classMap;

        }, null, ClassLoader::class);
    }
}
