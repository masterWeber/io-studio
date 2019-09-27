<?php

class ControllerInformationContacts extends Controller
{
    public function index(string $param)
    {
        if ($param) {
            $this->load->controller('error/not_found');
            return;
        }

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => 'information/contacts']);
        $data['feedback'] = $this->load->controller('common/feedback');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view('information/contacts', $data);
        $this->response->setOutput($output);
    }
}
