<?php

class Shows extends DataBase
{
    public function getAllShows()
    {
        $query = 'SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') as `date`, `startTime` FROM `colyseum`.shows
        ORDER BY title';

        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll(); 
        return $result;
    }
}
