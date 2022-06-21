<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4f1d76c6feff08e6d61a92cc372bf47f
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

        spl_autoload_register(array('ComposerAutoloaderInit4f1d76c6feff08e6d61a92cc372bf47f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4f1d76c6feff08e6d61a92cc372bf47f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4f1d76c6feff08e6d61a92cc372bf47f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}