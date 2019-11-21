<?php

class Router extends Controller
{

    private $controller;
    public $lang;
    public $route;
    public $param;

    public function run()
    {
        $partsUrl = $this->url->parse();
        $analyzedPartsUrl = $this->url->analyze($partsUrl);

        $uri = $_SERVER['REQUEST_URI'];
        if ($uri === '/') {
            $uri = '';
        }

        $this->lang = $analyzedPartsUrl['lang'];
        $this->route = $analyzedPartsUrl['route'];
        $this->param = $analyzedPartsUrl['param'];

        if (empty($this->lang)) {
            if (empty($this->route)) {
                $uri = $this->language->getCurrent() . $uri;
            } else {
                $uri = $this->language->getCurrent();
            }

            $this->response->redirect($uri);
        }

        if (key_exists(1, $partsUrl) && empty($this->route)) {
            $this->route = 'error/not_found';
        }

        $path = DIR_CONTROLLER . ROUTES_MAP['index'];
        $currentClass = preg_replace('/(\/)|(_)/i', '', ROUTES_MAP['index']);
        $class = 'Controller' . $currentClass;

        if ($this->route) {
            $path = DIR_CONTROLLER . $this->route;
            $class = 'Controller' . preg_replace('/(\/)|(_)/i', '', $this->route);
        }

        try {
            import($path);
        } catch (Exception $e) {
            $this->response->redirect('404');
        }

        $this->controller = new $class($this->registry);
        $this->controller->index($this->param);
    }

    public function rewrite(string $route)
    {
        foreach (ROUTES_MAP as $key => $value) {
            if ($value === $route) {
                return $key;
            }
        }
        return $route;
    }
}
