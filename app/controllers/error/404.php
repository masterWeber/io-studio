<?php

class ControllerError404 extends Controller
{
    public function index()
    {
        $route = 'error/404';

        $data = $this->load->language($route);
        $data['homepage_link'] = $this->url->link('/');

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['footer'] = $this->load->controller('common/footer');
        $output = $this->load->view($route, $data);

        $this->response->addHeader($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');

        $this->response->setOutput($output);
    }
}
