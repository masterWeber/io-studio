<?php

class Language
{
    protected $registry;

    public $defaults = 'ru';
    public $data = ['ru', 'en'];

    public function __construct(Registry &$registry)
    {
        $this->registry = $registry;
    }

    public function getCurrent()
    {
        $uri = $this->registry->get('uri');

        $lang = $uri->getLang();

        if (!$lang) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }

        return $lang;
    }
}
