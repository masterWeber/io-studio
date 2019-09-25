<?php

class ControllerInformationPortfolio extends Controller
{
    public function index(string $param)
    {
        if ($param) {
            $this->getProject($param);
            return;
        }

        $route = 'information/portfolio';

        $portfolio = $this->load->model($route);
        $data['projects'] = $portfolio->getAllProjects()->rows;

        for ($i = 0; $i < count($data['projects']); $i++) {
            $link = $this->url->link('portfolio/' . $data['projects'][$i]['id']);
            $data['projects'][$i]['link'] = $link;
        }

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view($route, $data);
        $this->response->setOutput($output);
    }

    public function getProject(string $id)
    {
        $route = 'information/project';

        $portfolio = $this->load->model('information/portfolio');
        $project = $portfolio->getProjectById((int)$id)->row;

        if (empty($project)) {
            $this->response->redirect('404');
        }

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['footer'] = $this->load->controller('common/footer');

        $data['link_back_project'] = $this->url->link('portfolio');
        $nextId = (int) $id + 1;
        $data['link_next_project'] = $this->url->link('portfolio/' . $nextId);

        $data = array_merge($data, $project);

        $output = $this->load->view($route, $data);

        $this->response->setOutput($output);
    }
}
