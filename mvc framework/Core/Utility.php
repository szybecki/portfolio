<?php

namespace Core;

abstract class Utility
{
    private function __construct()
    {

    }

    public static function redirect(string $path)
    {
        if ($path = "error") {
            header("Expires: Mon, 1 Jul 2000 06:00:00 GMT");
            header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");

            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
        }

        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/netarticles/$path");
        exit;
    }

    public static function hash(string $str): string
    {
        return hash('ripemd256', $str);
    }

    public static function clearString(string $str): string
    {
        return $str;
    }
}