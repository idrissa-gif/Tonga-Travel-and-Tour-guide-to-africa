<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit892bb47d2d70f35750b00a35dc1c881e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit892bb47d2d70f35750b00a35dc1c881e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit892bb47d2d70f35750b00a35dc1c881e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit892bb47d2d70f35750b00a35dc1c881e::$classMap;

        }, null, ClassLoader::class);
    }
}