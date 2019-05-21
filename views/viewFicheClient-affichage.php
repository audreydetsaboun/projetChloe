	<!-- SECTION INFO PERSONNELLES-->
	<section id="infosPerso">
		<!-- Fixe -->
		<p> 
			<?php 
				if(!empty($infosPersos['fixe'])){
					echo '<span class="boldy">Téléphone fixe : </span>' . $infosPersos["fixe"];
				}else{
					echo '';
				}
			?>
		</p>
		<!-- Mobile -->
		<p> 
			<?php 
				if(!empty($infosPersos['mobile'])){
					echo '<span class="boldy">Mobile : </span>' . $infosPersos["mobile"];
				}else{
					echo '';
				}
			?>
		</p>
		<!-- Mail -->
		<p> 
			<?php 
				if(!empty($infosPersos['mail'])){
					echo '<span class="boldy">Mail : </span>' . $infosPersos["mail"];
				}else{
					echo '';
				}
			?>
		</p>
		<!-- rue
		cp + ville -->
		<p> 
			<?php 
				if(!empty($infosPersos['adresse'])){
					echo '<span class="boldy">Adresse : </span><p class="adresse">' . $infosPersos["adresse"] . '</p><p class="adresse">' . $infosPersos["CP"] . ' ' . $infosPersos["Ville"] . '</p>';
				}else{
					echo '';
				}
			?>
		</p>
		<!-- Particularités peau-->
		<p> 
			<?php 
				if(!empty($infosPersos['particularites'])){
					echo '<span class="boldy">Particularités : </span>' . $infosPersos["particularites"];
				}else{
					echo '';
				}
			?>
		</p>
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