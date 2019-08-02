<?php

class ControllerCommonFeedback extends Controller
{
    public function index()
    {
        $data['action_feedback'] = $this->url->link('mail/feedback');
        return $this->load->view('common/feedback', $data);
    }
}
