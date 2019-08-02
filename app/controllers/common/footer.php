<?php

class ControllerCommonFooter extends Controller
{
    public function index()
    {
        $data['action_order'] = $this->url->link('mail/order');
        return $this->load->view('common/footer', $data);
    }
}
