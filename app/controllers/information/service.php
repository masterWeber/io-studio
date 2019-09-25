<?php

class ControllerInformationService extends Controller
{
    public function index()
    {
        $route = 'information/service';

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['feedback'] = $this->load->controller('common/feedback');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view($route, $data);
        $this->response->setOutput($output);
    }
}
