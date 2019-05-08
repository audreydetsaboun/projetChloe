<?php require_once 'controllers/controllerClient.php' ?>            
<main id="mainClients"> 
	<h1 id="titreBdd">Fichier Clients</h1> 

	<div id="boutonsBdd">
		<!-- bouton ajout nouveau client -->
		<a href="new_customer.php"><img id="plus" src="img/Plus.png" alt=""></a>

		<!-- bouton exportation BDD-->
		<a href="export_db.php"><img id="dl" src="img/dl.png" alt=""></a>
	</div>

	<!--barre de recherche-->
	<!--https://informagenie.com/1693/barre-de-recherche-site-php-mysql/-->
	<form name="recherche" id="rechClient">
		<input type="search" placeholder="Rechercher..." name="barreRecherche" id="" value=""/>
		<input type="button" onclick="" value="ok">
	</form>

	<!-- liste des clients -->
	<!--https://j-reaux.developpez.com/tutoriel/php/affichage-donnees-tableau-html/-->
	
	<!--  Afficher chaque client , cliquables vers leur propre fiche client -->
	<ul id="listeClient">
	<?php foreach ($clients as $client): ?>
	
		<li>
			<a id="lienFC" href="viewFicheClient.php?id_client=<?= $client['id_client']; ?>">
				<span id="col1"><?= $client['nom']; ?> </span>
				<span id="col2"><?= $client['prenom']; ?> </span>
				<span id="col3"><?= $client['mobile']; ?></span>
			</a>
		</li>
	
	<?php endforeach; ?>
	</ul>
</main>