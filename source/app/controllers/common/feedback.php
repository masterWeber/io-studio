<?php

class ControllerCommonFeedback extends Controller
{
    public function index()
    {
        $data['action_feedback'] = $this->url->link('feedback');
        return $this->load->view('common/feedback', $data);
    }
}
