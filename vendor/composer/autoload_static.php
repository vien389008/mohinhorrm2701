<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit339c80fa4e2e4e942f89a04bf84f18da
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit339c80fa4e2e4e942f89a04bf84f18da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit339c80fa4e2e4e942f89a04bf84f18da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit339c80fa4e2e4e942f89a04bf84f18da::$classMap;

        }, null, ClassLoader::class);
    }
}
