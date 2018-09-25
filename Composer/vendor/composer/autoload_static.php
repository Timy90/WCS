<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19f2ee59a6026ee3834c112f99f884eb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19f2ee59a6026ee3834c112f99f884eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19f2ee59a6026ee3834c112f99f884eb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit19f2ee59a6026ee3834c112f99f884eb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
