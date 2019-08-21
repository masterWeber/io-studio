<?php

class ControllerInformationPortfolio extends Controller
{
    public function index()
    {
        $portfolio = $this->load->model('information/portfolio');
        $data['projects'] = $portfolio->getAllProjects()->rows;

        for ($i = 0; $i < count($data['projects']); $i++) {
            $link = $this->url->link('portfolio/' . $data['projects'][$i]['id']);
            $data['projects'][$i]['link'] = $link;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view("information/portfolio", $data);
        $this->response->setOutput($output);
    }

    public function getProject(string $id)
    {

    }
}
