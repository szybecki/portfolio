<?php

namespace Core;

class ModuleManager
{
    public $moduleConfig;

    public $controller;
    public $action;
    public $data;

    public $oController;

    private $cAdditions;

    public $additions = null;

    public function __construct()
    {
        $this->moduleConfig = include('../Module/module.config.php');
    }

    public function getController()
    {
        $controller = "\\Module\\" . $this->controller . "\Controller\\" . $this->controller . "Controller";
        if (gettype($this->oController) != "object") {
            $this->oController = new $controller;
        }

        return $this->oController;
    }

    public function checkModule()
    {
        if (gettype(array_search($this->controller, $this->moduleConfig['modules'])) != "integer") {
            $this->controller = "Error";
        }
    }

    public function checkMethod()
    {
         if (!method_exists($this->getController(), $this->action . "Action")) {
            $this->action = "index";

            if ($this->controller != "Error") {
                $this->controller = "Error";
                $this->oController = new \Module\Error\Controller\ErrorController();
            }
         }
    }

    public function run()
    {
        $controller = $this->getController();
        $controller->viewModel = new \Core\ViewModel();

        $this->cAdditions = new Addition($controller, $this);
        $this->cAdditions->run();

        $controller->beforeRun($this->data, $this->action);

        $controller->run($this->action  . "Action", $this->data);
        $controller->viewModel->render(strtolower($this->controller), $controller->viewModel->view ?? $this->action);

    }
}
