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
        $sql = "SELECT * FROM `portfolio` WHERE `language` = ? ORDER BY `id`";
        return $this->db->query($sql, [$lang]);
    }

    public function getProjectByName(string $name, string $lang)
    {
        $sql = "SELECT * FROM `portfolio` WHERE `name` = ? AND `language` = ? LIMIT 1";
        return $this->db->query($sql, [$name, $lang]);
    }

    public function getProjectById(string $id)
    {
        $sql = "SELECT * FROM `portfolio` WHERE `id` = ? LIMIT 1";
        return $this->db->query($sql, [$id]);
    }
}