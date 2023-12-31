<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e8fa8fa6197bc4443b6ae3d14ff2351
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e8fa8fa6197bc4443b6ae3d14ff2351::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e8fa8fa6197bc4443b6ae3d14ff2351::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e8fa8fa6197bc4443b6ae3d14ff2351::$classMap;

        }, null, ClassLoader::class);
    }
}
