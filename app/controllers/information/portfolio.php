<?php

class ControllerInformationPortfolio extends Controller
{
    public function index()
    {
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view("information/portfolio", $data);
        $this->response->setOutput($output);
    }

    public function getItem(string $data)
    {

    }
}
