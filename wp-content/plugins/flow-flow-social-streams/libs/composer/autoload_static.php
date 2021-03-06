<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43eb14388167ec0d337656889a5073f4
{
    public static $files = array (
        '72142d7b40a3a0b14e91825290b5ad82' => __DIR__ . '/..' . '/cakephp/core/functions.php',
        '948ad5488880985ff1c06721a4e447fe' => __DIR__ . '/..' . '/cakephp/utility/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
        ),
        'C' => 
        array (
            'Cake\\Utility\\' => 13,
            'Cake\\Core\\' => 10,
            'Cake\\Cache\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Cake\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/utility',
        ),
        'Cake\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/core',
        ),
        'Cake\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/cache',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43eb14388167ec0d337656889a5073f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43eb14388167ec0d337656889a5073f4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit43eb14388167ec0d337656889a5073f4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit43eb14388167ec0d337656889a5073f4::$classMap;

        }, null, ClassLoader::class);
    }
}
