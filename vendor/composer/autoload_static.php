<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6856d9fcbd4e63abebfe790c6eb19b6
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webshop\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webshop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Webshop\\Data' => __DIR__ . '/../..' . '/src/Data.php',
        'Webshop\\OrderData' => __DIR__ . '/../..' . '/src/OrderData.php',
        'Webshop\\ProductData' => __DIR__ . '/../..' . '/src/ProductData.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6856d9fcbd4e63abebfe790c6eb19b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6856d9fcbd4e63abebfe790c6eb19b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6856d9fcbd4e63abebfe790c6eb19b6::$classMap;

        }, null, ClassLoader::class);
    }
}