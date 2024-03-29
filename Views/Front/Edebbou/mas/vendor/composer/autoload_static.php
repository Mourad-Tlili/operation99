<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3cba57ba492c87ed89cd7a657824d0d9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3cba57ba492c87ed89cd7a657824d0d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3cba57ba492c87ed89cd7a657824d0d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
