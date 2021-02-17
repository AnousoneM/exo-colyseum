<?php

require_once 'models/database.php';
require_once 'models/clients.php';
require_once 'models/showtypes.php';
require_once 'models/shows.php';


// J'instancie un nouvel objet avec la classe Clients
$clientsObj = new Clients;

// Utilisation de la methode getAllClients me permettant de recuperer tous les clients sous forme de tableau
$allClientsArray = $clientsObj->getAllClients();

// Utilisation de la methode getNbClients me permettant de recuperer un nb de clients sous forme de tableau
$clientsNbArrray = $clientsObj->getNbClients(10);

// Utilisation de la methode getClientsWithTypeCard me permettant de recuperer tous les clients avec un type de carte donnée sous forme de tableau
$clientsCardArray = $clientsObj->getClientsWithTypeCard(1);

$clientsStartWithArray = $clientsObj->getClientsStartWith('w');

$clientsDetailsArray = $clientsObj->getAllClientsWithDetails();


// J'instancie un nouvel objet avec la classe Showtypes
$showtypesObj = new Showtypes;

// Utilisation de la methode getAllShowTypes me permettant de recuperer tous les types de spectacle sous forme de tableau
$showtypesArray = $showtypesObj->getAllShowTypes();


$showsObj = new Shows;

$showsArray = $showsObj->getAllShows();





