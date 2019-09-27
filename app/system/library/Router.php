<?php

class Router extends Controller
{

    private $controller;

    public function run()
    {
        $partsUrl = $this->url->parse();
        $analyzedPartsUrl = $this->url->analyze($partsUrl);

        $uri = $_SERVER['REQUEST_URI'];
        if ($uri === '/') {
            $uri = '';
        }

        if (key_exists(1, $partsUrl) && empty($analyzedPartsUrl['route'])) {
            $analyzedPartsUrl['route'] = 'error/not_found';
        }
        $lang = $analyzedPartsUrl['lang'];
        $route = $analyzedPartsUrl['route'];
        $param = $analyzedPartsUrl['param'];


        if (empty($lang)) {
            if (empty($route)) {
                $uri = $this->language->getCurrent();
            } else {
                $uri = $this->language->getCurrent() . $uri;
            }

            $this->response->redirect($uri);
        }

        $path = DIR_CONTROLLER . ROUTES_MAP['index'];
        $currentClass = preg_replace('/(\/)|(_)/i', '', ROUTES_MAP['index']);
        $class = 'Controller' . $currentClass;

        if ($route) {
            $path = DIR_CONTROLLER . $route;
            $class = 'Controller' . preg_replace('/(\/)|(_)/i', '', $route);
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
