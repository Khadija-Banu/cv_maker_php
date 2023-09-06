<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite5de53b28d8efb733d289c35dfaa9c61
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

        spl_autoload_register(array('ComposerAutoloaderInite5de53b28d8efb733d289c35dfaa9c61', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite5de53b28d8efb733d289c35dfaa9c61', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite5de53b28d8efb733d289c35dfaa9c61::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
