<?php

class ControllerCommonHome extends Controller
{
    public function index()
    {
        $route = 'common/home';

        $lang = $this->language->getCurrent();

        if ($lang === 'ru') {
            $data['lang_link'] = '/en/';
            $data['lang_checked'] = '';
        } else {
            $data['lang_link'] = '/ru/';
            $data['lang_checked'] = 'checked';
        }

        $data['link_service'] = $this->url->link('service');
        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['feedback'] = $this->load->controller('common/feedback');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view($route, $data);
        $this->response->setOutput($output);
    }
}
