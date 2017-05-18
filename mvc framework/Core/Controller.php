<?php

namespace Core;

abstract class Controller
{
    public function __call($method, $args)
    {
        if (isset($this->$method)) {
            $func = $this->$method;
            return call_user_func_array($this->$method, $args);
        }
    }

    public function beforeRun($data, $action)
    {
        
    }

    public function afterRun()
    {

    }

    public function load(string $model)
    {
        if (empty($this->connection)) {
            $this->connection = new \PDO('mysql:host=localhost;dbname=u956036775_mshop', 'u956036775_mshop', 'VIB09WfRYPUS');
            $this->connection->query("SET NAMES utf8");
        }

        $tmp = "\\Model\\$model";
        $this->controller->{strtolower($model)} = new $tmp($this->connection);
        $this->loaded[] = $model;
    }

    public function unload()
    {
        foreach ($this->loaded as $l) {
            $this->controller->{$l} = null;
        }

        $this->connection = null;
    }
}