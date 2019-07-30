<?php

class Url
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

        $lang = $this->registry->get('language')->getCurrentLang();
        if ($route !== '/') {
            $url = $this->url . "/{$lang}/{$route}/";
        } else {
            $url = $this->url . "/{$lang}/";
        }


        return $url;
    }
}
