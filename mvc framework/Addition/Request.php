<?php

namespace Addition;

class Request
{
    public $priority = 1;

    private $controller;
    private $moduleManager;

    public function __construct(\Core\Controller $controller)
    {
        $this->controller = $controller;
    }

    public function run()
    {
        $this->get();
        $this->post();
    }

    public function get()
    {
        $this->controller->get = (object) $_GET;
        unset($_GET);

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $this->controller->get->request = true;
        } else {
            $this->controller->get->request = false;
        }
    }

    public function post()
    {
        $this->controller->post = (object) $_POST;
        unset($_POST);

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $this->controller->post->request = true;
        } else {
            $this->controller->post->request = false;
        }
    }
}