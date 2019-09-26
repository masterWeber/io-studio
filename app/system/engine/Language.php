<?php

class Language
{
    protected $registry;

    public function __construct(Registry &$registry)
    {
        $this->registry = $registry;
    }

    public function getCurrent()
    {
        $url = $this->registry->get('url');

        $partsUrl = $url->parse();
        $analyzedPartsUrl = $url->analyze($partsUrl);

        $lang = $analyzedPartsUrl['lang'];

        if (empty($lang)) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }

        return $lang;
    }
}
