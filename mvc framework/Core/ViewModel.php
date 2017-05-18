<?php

namespace Core;

class ViewModel
{
    public $path;
    public $render = true;

    private $smarty;

    public function __construct()
    {
        $this->path = "http://" . $_SERVER['HTTP_HOST'] . "/netarticles/";
        $this->smarty = new \Smarty();
    }

    public function render(string $module, string $action)
    {
        $this->smarty->template_dir = "../View/view/$module/";
        $this->smarty->compile_dir = "../View/tmp";

        foreach ($this as $key => $value) {
            if ($key != "render" && $key != "smarty" && $key != "layout") {
                $this->smarty->assign($key, $value);
            }
        }

        $this->smarty->assign("action", $action);
        $this->smarty->assign("content", "$action.tpl");

        if ($this->render) {
            $this->smarty->display("../View/layout/" . ($this->layout ?? "main") . '.tpl');
        }
    }
}