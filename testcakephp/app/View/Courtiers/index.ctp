<!-- La page index  en rapport avec la fonction index du controller CourtiersController -->

<h1>Listes des courtiers en fonction des groupes</h1>

<h2>Groupe 1</h2>

<div>
    <table>
        <thead>
            <th>ID DU COURTIER</th>
            <th>NOM DU COURTIER</th>
            <th>PRENOM DU COURTIER</th>
            <th>GROUPE DU COURTIER</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            <?php foreach ($courtiers as $courtier) {
                if ($courtier['Courtier']['groupe'] == 1) { ?>
                <tr>
                    <td><?php echo $courtier['Courtier']['id'] ?></td>
                    <td><?php echo $courtier['Courtier']['nom'] ?></td>
                    <td><?php echo $courtier['Courtier']['prenom'] ?></td>
                    <td><?php echo $courtier['Courtier']['groupe'] ?></td>
                    <td><button><?php echo $this->Html->link('Voir les clients', array('action' => '../clients/index', $courtier['Courtier']['groupe'])); ?></button></td>
                </tr>
                <?php }
            } ?>
        </tbody>
    </table>
</div>

<h2>Groupe 2</h2>

<div>
    <table>
        <thead>
            <th>ID DU COURTIER</th>
            <th>NOM DU COURTIER</th>
            <th>PRENOM DU COURTIER</th>
            <th>GROUPE DU COURTIER</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            <?php foreach ($courtiers as $courtier) {
                if ($courtier['Courtier']['groupe'] == 2) { ?>
                <tr>
                    <td><?php echo $courtier['Courtier']['id'] ?></td>
                    <td><?php echo $courtier['Courtier']['nom'] ?></td>
                    <td><?php echo $courtier['Courtier']['prenom'] ?></td>
                    <td><?php echo $courtier['Courtier']['groupe'] ?></td>
                    <td><button><?php echo $this->Html->link('Voir les clients', array('action' => '../clients/index', $courtier['Courtier']['groupe'])); ?></button></td>
                </tr>
                <?php }
            } ?>
        </tbody>
    </table>
</div>