<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit316201c806716a0ec3629669d54b78ff
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit316201c806716a0ec3629669d54b78ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit316201c806716a0ec3629669d54b78ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit316201c806716a0ec3629669d54b78ff::$classMap;

        }, null, ClassLoader::class);
    }
}
