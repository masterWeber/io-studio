<?php

class ControllerInformationTechnologies extends Controller
{
    public function index()
    {
        $route = 'information/technologies';

        $technologies = $this->load->model($route);
        $data['technologies'] = $technologies->getAllTechnologies();

        return $this->load->view($route, $data);
    }
}