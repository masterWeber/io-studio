<?php


class ModelInformationPortfolio extends Model
{
    public function getAllProjects()
    {
        $sql = "SELECT * FROM `portfolio` ORDER BY `id`";
        return $this->db->query($sql);
    }

    public function getProjectById(int $id = 0)
    {
        $sql = "SELECT * FROM `portfolio` WHERE `id` = '$id' LIMIT 1";
        return $this->db->query($sql);
    }
}