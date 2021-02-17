<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Clients extends DataBase
{

    public function getAllClients()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients`';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }

    public function getNbClients($limit)
    {
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients` LIMIT ' . $limit;
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll(); 
        return $result; 
    }

    public function getClientsWithTypeCard($type)
    {

        $query = 'SELECT clients.id, lastName, firstName, clients.cardNumber, cardtypes.type FROM clients
        INNER JOIN cards
        ON clients.cardNumber = cards.cardNumber
        INNER JOIN cardtypes
        ON cardtypes.id = cards.cardTypesId
        WHERE cardTypesId = ' . $type;

        $queryObj = $this->dataBase->query($query);

        $result = $queryObj->fetchAll(); 
        return $result;
    }

}
