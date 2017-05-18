<?php

namespace Addition;

class Session
{
    public $priority = 1;

    private $controller;

    public function __construct(\Core\Controller $controller)
    {
        $this->controller = $controller;
    }

    public function run()
    {
        $this->controller->session = $this;

        foreach ($_SESSION as $key => $value) {
            $this->{$key} = $_SESSION[$key];
        }
    }

    public function save()
    {
        foreach ($this as $key => $value) {
            if (gettype($this->{$key}) != "object" && $key != "priority") {
                $_SESSION[$key] = $this->{$key};
            }
        }
    }

    public function remove(string $property)
    {
        if (isset($this->{$property})) {
            unset($this->{$property});
            unset($_SESSION[$property]);
        }
    }

    public function clear(int $mode = 0)
    {
        $_SESSION = array();
        session_destroy();
        
        if ($mode == 0) {
            foreach ($this as $key => $value) {
                if (gettype($this->{$key}) != "object"){
                    $_SESSION[$key] = $this->{$key};
                }
            }
        }
    }

    public function check(string $property, string $value = null)
    {
        if (empty($value)) {
            if (isset($this->{$property})) {
                return true;
            } else {
                return false;
            }
        } else {
            if (isset($this->{$property}) && $this->{$property} == $value) {
                return true;
            } else {
                return false;
            }
        }
    }
}