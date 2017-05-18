<?php

namespace Core\Controller;

abstract class ActionController extends \Core\Controller
{
    public function run(string $action, string $date = null)
    {
        if (method_exists($this, $action)) {
            $this->{$action}($date);
        } else {
            Utility::redirect("error");
        }
    }
}