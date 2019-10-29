<?php

class ControllerCommonHeader extends Controller
{
    public function index(array $args)
    {
        $data = [];

        if (!empty($args)) {
            $lang = $this->load->language($args['route']);
            $data = array_merge($data, $lang);
        }

        $lang = $this->language->getCurrent();

        $route = $this->router->route;

        if ($lang === 'ru') {
            $data['lang_link'] = $this->url->link($route, 'en');
            $data['lang_checked'] = '';
        } else {
            $data['lang_link'] = $this->url->link($route, 'ru');
            $data['lang_checked'] = 'checked';
        }

        $data['menu'] = $this->load->controller('common/menu');
        $data['base'] = $this->url->link('/');

        return $this->load->view('common/header', $data);
    }
}
