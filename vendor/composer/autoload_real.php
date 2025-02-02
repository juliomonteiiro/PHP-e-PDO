<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit54f9460ba8654f9f302ba5eb85d35c68
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit54f9460ba8654f9f302ba5eb85d35c68', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit54f9460ba8654f9f302ba5eb85d35c68', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit54f9460ba8654f9f302ba5eb85d35c68::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
