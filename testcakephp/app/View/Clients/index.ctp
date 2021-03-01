<!-- La page index  en rapport avec la fonction index du controller ClientsController -->

<h1>Listes des clients</h1>

<div>
    <table>
        <thead>
            <th>ID DU CLIENT</th>
            <th>NOM DU CLIENT</th>
            <th>PRENOM DU CLIENT</th>
        </thead>
        <tbody>
            <?php foreach ($clients as $client) {?>
                <tr>
                    <td><?php echo $client['Client']['id'] ?></td>
                    <td><?php echo $client['Client']['nom'] ?></td>
                    <td><?php echo $client['Client']['prenom'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div>
    <button><a href="../../courtiers/">Retour</a></button>
</div>