<?php

class URL
{
    protected $registry;
    public $url;

    public function __construct(Registry &$registry)
    {
        $this->registry = $registry;

        if ($_SERVER['HTTPS'] === 'on') {
            $this->url = 'https://' . $_SERVER['HTTP_HOST'];
        } else {
            $this->url = 'http://' . $_SERVER['HTTP_HOST'];
        }
    }

    public function link(string $route)
    {

        $lang = $this->registry->get('language')->getCurrent();
        if ($route !== '/') {
            $url = $this->url . "/{$lang}/{$route}/";
        } else {
            $url = $this->url . "/{$lang}/";
        }


        return $url;
    }

    public function parse(string $url = '')
    {
        if ($url === '') {
            $url = mb_strtolower($_SERVER['REQUEST_URI']);
        }

        $parts = explode('/', $url);
        $parts = array_filter($parts, function ($item) {
            return !empty($item);
        });
        $parts = array_values($parts);

        return $this->analyze($parts);
    }

    public function analyze(array $urlParts)
    {

        $result = [
          'lang' => '',
          'route' => '',
          'param' => ''
        ];

        if (count($urlParts) === 0) {
            $result['route'] = ROUTES_MAP['index'];
            return $result;
        }

        for ($i = 0; $i < count($urlParts); $i++) {
            $part = $urlParts[$i];

            switch (true) {
                case $this->isLang($part):
                    $result['lang'] = $part;
                    break;
                case $this->isRoute($part):
                    $result['route'] = ROUTES_MAP[$part];
                    break;
                case $result['route']:
                    $result['param'] = $part;
                    break;
            }
        }

        return $result;
    }

    private function isLang(string $part)
    {
        foreach (LANGUAGES as $lang) {
            if ($part === $lang) {
                return true;
            }
        }

        return false;
    }

    private function isRoute(string $part)
    {
        foreach (ROUTES_MAP as $key => $value) {
            if ($part === $key) {
                return true;
            }
        }

        return false;
    }
}
