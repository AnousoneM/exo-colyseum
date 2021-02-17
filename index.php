<?php
require_once 'controllers/index-controller.php'
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="row">
        <form action="" type="get">
            <button type="submit" name="getAllClients" value="true" class="btn btn-outline-primary">Afficher tous les clients</button>
        </form>
    </div>

    <h1 class="text-center">Affichage des données</h1>

    <div class="row justify-content-center">
        <table class="table table-striped table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($allClientsArray as $client) { ?>
                    <tr>
                        <th><?= $client['id'] ?></th>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="row justify-content-center">
        <table class="table table-striped table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type de spectacle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($showtypesArray as $showtypes) { ?>
                    <tr>
                        <th><?= $showtypes['id'] ?></th>
                        <td><?= $showtypes['type'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="row justify-content-center">
        <table class="table table-striped table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($clientsNbArrray as $client) { ?>
                    <tr>
                        <th><?= $client['id'] ?></th>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="row justify-content-center">
        <table class="table table-striped table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Numéro de carte</th>
                    <th scope="col">Type de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($clientsCardArray as $client) { ?>
                    <tr>
                        <th><?= $client['id'] ?></th>
                        <td><?= $client['lastName'] ?></td>
                        <td><?= $client['firstName'] ?></td>
                        <td><?= $client['cardNumber'] ?></td>
                        <td><?= $client['type'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="row justify-content-center">
        <table class="table table-striped table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($clientsStartWithArray as $client) { ?>
                    <tr>
                        <td><?= $client['lastName'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="row justify-content-center">
        <table class="table table-striped table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Acteur</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure de représentation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($showsArray as $show) { ?>
                    <tr>
                        <td><?= $show['title'] ?></td>
                        <td><?= $show['performer'] ?></td>
                        <td><?= $show['date'] ?></td>
                        <td><?= $show['startTime'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="row justify-content-center">
        <?php foreach ($clientsDetailsArray as $client) { ?>
            <div class="card col-12">
                <div class="card-body">
                    <ul>
                        <li>Nom : <?= $client['lastName'] ?></li>
                        <li>Prénom : <?= $client['firstName'] ?></li>
                        <li>Date de naissance : <?= $client['birthDate'] ?></li>
                        <li>Carte de fidélité : <?= $client['card'] == 1 ? 'oui' : 'non' ?></li>
                        <?php if ($client['card'] == 1) { ?>
                            <li>Numéro de la carte : <?= $client['cardNumber'] ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>