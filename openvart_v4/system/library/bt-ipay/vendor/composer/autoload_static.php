<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1040fbb3a748696697743052a8c12667
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BtIpay\\Opencart\\' => 16,
            'BTransilvania\\Api\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BtIpay\\Opencart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'BTransilvania\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/banca-transilvania/ipay-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1040fbb3a748696697743052a8c12667::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1040fbb3a748696697743052a8c12667::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1040fbb3a748696697743052a8c12667::$classMap;

        }, null, ClassLoader::class);
    }
}
