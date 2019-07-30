<?php

class ControllerCommonHome extends Controller
{
    public function index()
    {
        $lang = $this->language->getCurrentLang();

        if ($lang === 'ru') {
            $data['lang_link'] = '/en/';
            $data['lang_checked'] = '';
        } else {
            $data['lang_link'] = '/ru/';
            $data['lang_checked'] = 'checked';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['feedback'] = $this->load->controller('common/feedback');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view('common/home', $data);
        $this->response->setOutput($output);
    }
}
