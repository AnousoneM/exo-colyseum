<?php

class Showtypes extends DataBase
{
    public function getAllShowTypes()
    {
        $query = 'SELECT `id`, `type` FROM `showtypes`';
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll(); 
        return $result;
    }
}
