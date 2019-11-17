<?php

class ControllerMailFeedback extends Controller
{
    public function index()
    {
        $data = $this->load->language('mail/feedback');
        $json = [];
        $data = array_merge($data, $_POST);
        $data['success'] = true;
        
        $message = $this->load->view('mail/feedback', $data);

        $mail = new Mail();
        $mail->setTo(EMAIL);
        $mail->setFrom(EMAIL);
        $mail->setSender($_SERVER['SERVER_NAME']);
        $mail->setSubject($data['subject']);
        $mail->setHtml($message);
        try {
            $mail->send();
        } catch (Exception $e) {
            $data['success'] = false;
        }


        if (isset($_POST['json'])) {
            $json['success'] = $data['success'];

            return json_encode($json);
        }

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view('mail/result', $data);
        return $this->response->setOutput($output);
    }
}