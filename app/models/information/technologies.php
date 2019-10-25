<?php


class ModelInformationTechnologies extends Model
{
    public function getAllTechnologies()
    {
        $sql = "SELECT * FROM `technologies` ORDER BY `id`";
        return $this->db->query($sql)->rows;
    }

    public function getTechnology(string $id)
    {
        $sql = "SELECT * FROM `technologies` where `id` = '{$id}' ORDER BY `id`";
        return $this->db->query($sql)->row;
    }


}