<?php

class ControllerError404 extends Controller
{
    public function index()
    {
        $data = $this->load->language("error/404");
        $output = $this->load->view("error/404", $data);

        $this->response->addHeader($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');

        $this->response->setOutput($output);
    }
}
