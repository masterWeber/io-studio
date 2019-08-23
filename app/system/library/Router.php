<?php

class Router extends Controller
{

    private $controller;

    public function run()
    {
        $urlParts = $this->url->parse();

        $uri = $_SERVER['REQUEST_URI'];
        $lang = $urlParts['lang'];
        $route = $urlParts['route'];
        $param = $urlParts['param'];


        if (empty($lang)) {
            if (empty($route)) {
                $uri = $this->language->getCurrent();
            } else {
                $uri = $this->language->getCurrent() . $uri;
            }

            $this->response->redirect($uri);
        }

        $path = DIR_CONTROLLER . ROUTES_MAP['index'];
        $currentClass = preg_replace('/\//i', '', ROUTES_MAP['index']);
        $class = 'Controller' . $currentClass;

        if ($route) {
            $path = DIR_CONTROLLER . $route;
            $class = 'Controller' . preg_replace('/\//i', '', $route);
        }

        try {
            import($path);
        } catch (Exception $e) {
            $this->response->redirect('404');
        }

        $this->controller = new $class($this->registry);
        $this->controller->index($param);
    }
}
