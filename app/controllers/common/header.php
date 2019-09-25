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

        $data['menu'] = $this->load->controller('common/menu');
        $data['link_home'] = $this->url->link('/');

        return $this->load->view('common/header', $data);
    }
}
