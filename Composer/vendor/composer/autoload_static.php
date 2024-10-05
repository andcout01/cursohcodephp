<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72a130323e35ec9cfad55478a6aeea5a
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit72a130323e35ec9cfad55478a6aeea5a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit72a130323e35ec9cfad55478a6aeea5a::$classMap;

        }, null, ClassLoader::class);
    }
}
