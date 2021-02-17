<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Clients extends DataBase
{
    /**
     * Methode permettant d'obtenir tous les clients
     *
     * @return array
     */
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

    /**
     * Methode permettant d'obtenir tous les clients selon une limite
     *
     * @param [int] $limit
     * @return array
     */
    public function getNbClients(int $limit)
    {
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients` LIMIT ' . $limit;
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll();
        return $result;
    }

    /**
     * Methode permettant d'obtenir la liste des clients selon un type de carte
     *
     * @param [int] $type
     * @return array
     */
    public function getClientsWithTypeCard(int $type)
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

    /**
     * Undocumented function
     *
     * @param [string] $letter
     * @return void
     */
    public function getClientsStartWith(string $letter)
    {

        $query = 'SELECT `lastName`, `firstname` FROM `colyseum`.`clients`
        WHERE `lastname` LIKE \'' . $letter . '%\'
        ORDER BY `lastName`';

        $queryObj = $this->dataBase->query($query);

        $result = $queryObj->fetchAll();

        return $result;
    }

    public function getAllClientsWithDetails()
    {

        $query = 'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') as `birthDate`, `card`, `cardNumber` FROM `colyseum`.`clients`';

        $queryObj = $this->dataBase->query($query);

        $result = $queryObj->fetchAll();

        return $result;
    }
}
