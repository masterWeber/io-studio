<?php

class ControllerCommonHeader extends Controller
{
    public function index()
    {
        $data['menu'] = $this->load->controller('common/menu');
        $data['link_home'] = $this->url->link('/');

        return $this->load->view('common/header', $data);
    }
}
