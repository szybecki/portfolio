<?php

namespace Addition;

class Last
{
    public $priority = 2;

    private $controller;

    private $moduleManager;

    public function __construct(\Core\Controller $controller, \Core\ModuleManager $manager)
    {
        $this->controller = $controller;
        $this->moduleManager = $manager;
    }

    public function run()
    {
        if ( $this->moduleManager->controller != "Error") {
            $current = trim($_SERVER['REQUEST_URI']);
            if (!isset($this->controller->session->last)) {
                $this->controller->session->last = $current;
            } else {
                if (gettype($this->controller->session->last) == "array") {
                    $this->controller->session->last = array($current, $this->controller->session->last[0]);
                } else {
                    $this->controller->session->last = array($current, $this->controller->session->last);
                }
            }

            $this->controller->session->save();
        }

        $this->controller->dontCacheLast = function(){ $this->dontCacheLast(); };
    }

    public function dontCacheLast()
    {
        $this->controller->session->last = $this->controller->session->last[1];
        $this->controller->session->save();
    }
}