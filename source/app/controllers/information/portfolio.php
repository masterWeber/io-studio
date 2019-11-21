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
        $lang = $this->language->getCurrent();

        $portfolio = $this->load->model($route);
        $data['projects'] = $portfolio->getProjectsByLang($lang)->rows;

        for ($i = 0; $i < count($data['projects']); $i++) {
            $link = $this->url->link('portfolio/' . $data['projects'][$i]['name']);
            $data['projects'][$i]['link'] = $link;
        }

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['footer'] = $this->load->controller('common/footer');

        $output = $this->load->view($route, $data);
        $this->response->setOutput($output);
    }

    public function getProject(string $name)
    {
        $route = 'information/project';
        $lang = $this->language->getCurrent();

        $portfolio = $this->load->model('information/portfolio');
        $project = $portfolio->getProjectByName($name, $lang)->row;

        if (empty($project)) {
            $this->load->controller('error/not_found');
            return;
        }

        $projectId = (int)$project['id'];

        $data['header'] = $this->load->controller('common/header', 'index', ['route' => $route]);
        $data['footer'] = $this->load->controller('common/footer');

        $data['link_back_project'] = $this->url->link('portfolio');

        $nextProjectId = ++$projectId;
        $nextProject = $portfolio->getProjectById($nextProjectId)->row;

        if (!empty($nextProject)) {
            $data['link_next_project'] = $this->url->link('portfolio/' . $nextProject['name']);
        } else {
            $data['link_next_project'] = false;
        }

        $data = array_merge($data, $project);

        $output = $this->load->view($route, $data);

        $this->response->setOutput($output);
    }
}
