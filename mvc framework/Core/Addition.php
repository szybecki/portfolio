<?php

namespace Core;

class Addition
{
    private $controller;

    private $additions;

    private $moduleManager;

    public function __construct(Controller $controller, ModuleManager $manager)
    {
        $this->controller = $controller;
        $this->moduleManager = $manager;

        foreach ($this->moduleManager->additions as $addition) {
            $mod = '\\Addition\\' . $addition;
            $this->additions[] = new $mod($this->controller, $this->moduleManager);
        }
    }

    public function run()
    {
        $priorities = array();

        foreach ($this->additions as $addition) {
            $priorities[$addition->priority ?? 1][] = $addition;
        }

        ksort($priorities);

        foreach ($priorities as $priority){
            foreach ($priority as $addition) {
                $addition->run();
            }
        }
        
    }
}