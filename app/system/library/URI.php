<?php

class URI extends Controller
{
    private $uri;
    private $uriParts;
    private $lang;
    private $route;

    public function __construct(&$registry)
    {
        parent::__construct($registry);
        if (isset($_SERVER['REQUEST_URI'])) {
            $this->uri = mb_strtolower($_SERVER['REQUEST_URI']);
        } else {
            $this->uri = '';
        }
    }

    public function parse()
    {

        $this->uriParts = explode('/', $this->uri);
        $this->cleanUriParts();
        $this->reindexUriParts();

        if ($this->getLang()) {
            $this->lang = $this->getLang();
            $this->route = $this->getRoute();
        } else {
            $this->lang = $this->language->defaults;
            $this->route = $this->uriParts;
        }

        $this->reindexRoute();

        return [
          'lang' => $this->lang,
          'route' => $this->route
        ];
    }

    private function cleanUriParts()
    {
        $this->uriParts = array_filter($this->uriParts, function ($item) {
            return !empty($item);
        });
    }

    private function reindexUriParts()
    {
        $this->uriParts = array_values($this->uriParts);
    }

    private function reindexRoute()
    {
        $this->route = array_values($this->route);
    }

    public function getLang()
    {

        if (key_exists(0, $this->uriParts)) {
            foreach ($this->language->data as $lang) {
                if ($this->uriParts[0] === $lang) {
                    return $lang;
                }
            }
        }

        return false;
    }

    private function getRoute()
    {
        return array_diff($this->uriParts, [$this->lang]);
    }
}
