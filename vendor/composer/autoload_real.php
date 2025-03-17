<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit121e5acf8f70d210bac20a071f45c504
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

        spl_autoload_register(array('ComposerAutoloaderInit121e5acf8f70d210bac20a071f45c504', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit121e5acf8f70d210bac20a071f45c504', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit121e5acf8f70d210bac20a071f45c504::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
