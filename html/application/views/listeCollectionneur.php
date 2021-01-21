<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming - Collectionneurs</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/gameboy.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleHeader.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleCollectionneur.css">
</head>

<body>
    <?php $this->load->view('header') ?>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Droit</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($collectionneurs as $collectionneur) : ?>
                    <tr>
                        <td class="table-data"><?php echo $collectionneur['identifiant'] ?></td>
                        <td class="table-data"><?php echo $collectionneur['nom']?></td>
                        <td class="table-data"><?php echo $collectionneur['prenom']?></td>
                        <td class="table-data"><?php echo $collectionneur['droit']?></td>
                        <td class="table-data-supprimer">
                            <form action="<?echo site_url('Gaming/supprimerCollectionneur') ?>" method="POST">
                                <input type="hidden" name="id_collectionneur" value="<?php echo $collectionneur['identifiant'] ?>">
                                <input type="submit" value="Supprimer" class="supprimer-btn">
                            </form></td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </main>

</body>

</html>