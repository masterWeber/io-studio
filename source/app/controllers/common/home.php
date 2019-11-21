<?php

class ControllerCommonHome extends Controller
{
    public function index()
    {
        $route = 'common/home';

        $data['link_service'] = $this->url->link('service');
        $data['link_portfolio'] = $this->url->link('portfolio');
        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['feedback'] = $this->load->controller('common/feedback');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view($route, $data);
        $this->response->setOutput($output);
    }
}
