	<!-- SECTION INFO PERSONNELLES-->
	<section id="infosPerso">
		<p>Fixe : <?= $infosPersos['fixe']; ?></p>
		<p>Mobile : <?= $infosPersos['mobile']; ?></p>
		<p>Mail : <?= $infosPersos['mail']; ?></p>
		<p>adresse : </p>
		<p><?= $infosPersos['adresse']; ?></p>
		<p><?= $infosPersos['CP']; ?> <?= $infosPersos['Ville']; ?></p>
		<!-- rue
		cp + ville -->
		<p>Particularités : <?= $infosPersos['particularites']; ?></p>
	</section>

	<!-- SECTION FORFAIT-->
	<section id="forfait">
		<h2>Forfait </h2>
		<article id="boutonsBdd">
			<!-- bouton Modifier client -->
			<a href="???.php"><img id="btnModif" src="img/btn_modif.png" alt=""></a>
			<!-- bouton ajout nouveau forfait -->
			<a href="???.php"><img id="plus" src="img/Plus.png" alt=""></a>
		</article>

		<!-- appeler ici un forfait s'il y en a un -->
		<?php echo testForfait($_GET['id_client']); ?>
		
	</section>

	<!-- SECTION VISITES-->
	<section id="visites">
		<h2>Visites</h2>
		<!-- bouton ajout nouvelle visite -->
		<a href="???.php"><img id="plus" src="img/Plus.png" alt=""></a>
		<!-- afficher ici les visites qui ont eu lieu -->
		<!-- PROBLEME : ne s'affiche pas s'il y a des visites / affiche la bonne phrase s'il n'y en a pas... -->
		<?php echo getVisites($_GET['id_client']); ?>
		
	</section>

	<!-- SECTION MESSAGES-->
	<section id="messRecus">
		<h2>Messages reçus</h2>
		<!-- afficher ici les 5 derniers messages reçus -->
		<?php echo getMail($_GET['id_client']);?>
		
	</section>