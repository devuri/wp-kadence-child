<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c97e57beb52e114c4d5311fada0a76d
{
    public static $files = array (
        'daea847d21c282638463759ee2c5fce3' => __DIR__ . '/../..' . '/src/inc/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Urisoft\\' => 8,
        ),
        'K' => 
        array (
            'Kdx\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Urisoft\\' => 
        array (
            0 => __DIR__ . '/..' . '/devuri/plugin-interface/src',
        ),
        'Kdx\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kdx\\Theme' => __DIR__ . '/../..' . '/src/Theme.php',
        'Urisoft\\AbstractPlugin' => __DIR__ . '/..' . '/devuri/plugin-interface/src/AbstractPlugin.php',
        'Urisoft\\PluginInterface' => __DIR__ . '/..' . '/devuri/plugin-interface/src/PluginInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c97e57beb52e114c4d5311fada0a76d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c97e57beb52e114c4d5311fada0a76d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c97e57beb52e114c4d5311fada0a76d::$classMap;

        }, null, ClassLoader::class);
    }
}