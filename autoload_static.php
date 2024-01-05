<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84ff2dfb9625d0d5e78990de306dda5a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit84ff2dfb9625d0d5e78990de306dda5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84ff2dfb9625d0d5e78990de306dda5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84ff2dfb9625d0d5e78990de306dda5a::$classMap;

        }, null, ClassLoader::class);
    }
}