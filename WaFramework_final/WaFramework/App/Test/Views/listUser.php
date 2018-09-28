

<h1>Voici la liste de nos users</h1>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user){ ?>
            <tr>
                <td><?= $user->getId() ?></td>
                <td><?= $user->getNom() ?></td>
                <td><?= $user->getPrenom() ?></td>
                <td><?= $user->getEmail() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>