<?php

namespace Core;

class Router
{
    private $manager;

    public function __construct(ModuleManager $manager)
    {
        $this->manager = $manager;
    }

    public function route()
    {
        $routes  = $this->manager->moduleConfig['routes'];
        $request = explode("?", $_SERVER['REQUEST_URI']);

        if (gettype($request) == "array") {
            $request = $request[0];
        }

        $request = preg_replace('#/+#','/', $request);

        if (array_key_exists($request, $routes)) {
            $this->manager->controller = $routes[$request]['controller'];
            $this->manager->action = $routes[$request]['action'];
            @$this->manager->data = $routes[$request]['data'];
        } else {
            foreach ($routes as $key => $value) {
                $tmp = $key;
                if (!!strpos($tmp, '[:controller]')) {
                    $key = str_replace('[:controller]', $value[':controller'] . "{1,}", $key);
                }

                if (!!strpos($tmp, '[:action]')) {
                    $key = str_replace('[:action]', $value[':action'] . "{1,}", $key);
                }

                if (!!strpos($tmp, '[:data]')) {
                    $key = str_replace('[:data]', $value[':data'], $key);
                }

                if (!!preg_match( "/^" . str_replace('/', '\/', $key) . "$/", $request)) {
                    $tmp = str_replace(array('(', ')', '{', '}', '0', '1', ','), '', $tmp);
                    $tmp = explode('/', $tmp);
                    if (($cPlace = array_search('[:controller]', $tmp))) {
                        $this->manager->controller = ucfirst(explode('/', $request)[$cPlace]);
                    } else {
                        $this->manager->controller = $value['controller'];
                    }

                    if (($aPlace = array_search('[:action]', $tmp))) {
                        if (isset(explode('/', $request)[$aPlace])) {
                            $this->manager->action = explode('/', $request)[$aPlace];
                        } else {
                            $this->manager->action = $value['action'];
                        }

                    } else {
                        $this->manager->action = $value['action'];
                    }

                    if (($dPlace = array_search('[:data]', $tmp)) && isset(explode('/', $request)[$dPlace])) {
                        $this->manager->data = explode('/', $request)[$dPlace];
                    }

                    return;
                }
            }
        }
    }
}