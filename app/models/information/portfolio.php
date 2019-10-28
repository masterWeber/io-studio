<?php


class ModelInformationPortfolio extends Model
{
    public function getAllProjects()
    {
        $sql = "SELECT * FROM `portfolio` ORDER BY `id`";
        return $this->db->query($sql);
    }

    public function getProjectsByLang(string $lang)
    {
        $sql = "SELECT * FROM `portfolio` WHERE `language` = '$lang' ORDER BY `id`";
        return $this->db->query($sql);
    }

    public function getProjectByName(string $name, string $lang)
    {
        $sql = "SELECT * FROM `portfolio` WHERE `name` = '$name' AND `language` = '$lang' LIMIT 1";
        return $this->db->query($sql);
    }

    public function getProjectById(string $id)
    {
        $sql = "SELECT * FROM `portfolio` WHERE `id` = '$id' LIMIT 1";
        return $this->db->query($sql);
    }
}