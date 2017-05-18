<?php

namespace Core;

class Loader
{
    private function __construct()
    {

    }

    public static function loadmodule(string $module)
    {
        self::load("Module/$module/");

        //require_once "../Module/Error/Error.controller.php";
    }

    public static function loadcore()
    {
        require_once '../Smarty/libs/Smarty.class.php';
        self::load("Core/");
    }

    public static function loadaddition(ModuleManager $manager)
    {
        $dir  = "../Addition/";
        $scan = scandir($dir);
        $res = [];

        foreach ($scan as $f) {
            if (is_file($dir . $f) && $f != '.' && $f != '..') {
                $res[] = explode('.', $f)[0];
                require_once $dir . $f;
            }
        }

        $manager->additions = $res;
    }

    public static function loadmodel()
    {
        self::load("Model/");
    }

    private static function load(string $path)
    {
        if ( substr($path, 0, 3) != "../")
            $path = "../" . $path;

        $scan = scandir($path);
        $queue = [];

        foreach ($scan as $f) {
            if ( $f != '.' && $f != '..') {
                if (is_file($path . $f)) {
                    require_once $path . $f;
                } else {
                   $queue[] = $path . $f . "/";
                }
            }
        }

        foreach ($queue as $q) {
            self::load($q);
        }
    }
}