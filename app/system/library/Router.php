<?php

class Router extends Controller
{

    private $controller;
    const ROUTES_MAP = [
      'index' => 'common/home',
      'service' => 'information/service',
      'contacts' => 'information/contacts',
      'portfolio' => 'information/portfolio',
      '404' => 'error/404'
    ];

    public function run()
    {
        $uri = $this->uri->parse();
        $route = implode("/", $uri['route']);

        //Проверяем uri на наличие языка
        if (!$this->uri->getLang()) {

            if (empty($route)) {
                $route = $this->language->getCurrent();
            } else {
                $route = $this->language->getCurrent() . '/' . $route;
            }

            $this->response->redirect($route);
        }

        $path = DIR_CONTROLLER . self::ROUTES_MAP['index'];
        $currentClass = preg_replace('/\//i', '', self::ROUTES_MAP['index']);
        $class = 'Controller' . $currentClass;

        if (!empty($uri['route'])) {
            $detailedRoute = $this->parseRoute($route);

            $path = $detailedRoute['path'];
            $class = $detailedRoute['controller_name'];
        }

        try {
            import($path);
        } catch (Exception $e) {
            $this->response->redirect('404');
        }

        $this->controller = new $class($this->registry);
        $this->controller->index();
    }

    private function parseRoute(string $route)
    {

        if (!key_exists($route, self::ROUTES_MAP)) {
            $this->response->redirect('404');
        }

        $path = DIR_CONTROLLER . self::ROUTES_MAP[$route];

        $output = [
          'path' => $path,
          'controller_name' => 'Controller' . preg_replace('/\//i', '', self::ROUTES_MAP[$route])
        ];

        return $output;
    }

}
