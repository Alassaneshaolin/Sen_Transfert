<?php
include('Controler/Connexion/Connexion.php');
$db = Connexion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="Modele/Requete.php" method="post">
    <div>
    <input type="email" name="Email_utilisateur">
    </div>
    <div>
    <input type="email" name="Email_recepteur">
    </div>
    <div>
    <textarea name="message_utilisateur" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
    <input type="file" name="nom_fichier">
    </div>
    <div>
    <button type="submit" name="Envoyer">Envoyer</button>
    </div>
    </form>

    <div>Affichage de la table</div>
        <table border="2">
	<tr>
		<td>Id produit</td>
		<td>Libellé</td>
		<td>Prix</td>
		<td>Description</td>
		<td>Modifier</td>
		<td>Supprimer</td>
	</tr>
	<?php
	foreach ($affiche as $rowproduit)
	{ ?>
	<tr>
		<td><?= $rowproduit['id_produit']?></td>
		<td><?= $rowproduit['libelle']?></td>
		<td><?= $rowproduit['prix']?></td>
		<td><?= $rowproduit['description']?></td>
		<td><a href="Modifier.php?id_produit=<?= $rowproduit['id_produit']?>">Modifier</a></td>
		<td><a href="Supprimer.php?id_produit=<?= $rowproduit['id_produit']?>">Supprimer</a></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>