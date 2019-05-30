<form method="POST" action="../controllers/controllerUpdateClient.php">
	<input type="hidden" id="idClient" name="id_client_hidden" value="<?= $infosPersos['id_client']; ?>">
	
	<fieldset>
		<legend>Informations personnelles</legend>
		<p>
			<label for="nom">nom :</label>    
			<input type="text" id="nom" name="nom" value="<?= $infosPersos['nom']; ?>" required>
		</p>
		<p>
			<label for="prenom">prénom :</label>    
			<input type="text" id="prenom" name="prenom" value="<?= $infosPersos['prenom']; ?>" required>
		</p>
		<p>
			<label for="adresse">rue :</label>    
			<input type="text" id="rue" name="rue" value="<?= $infosPersos['adresse']; ?>">
		</p>
		<p>
			<label for="cp">CP :</label>    
			<input type="text" id="cp" name="cp" value="<?= $infosPersos['CP']; ?>">
		</p>
		<p>
			<label for="ville">ville :</label>    
			<input type="text" id="ville" name="ville" value="<?= $infosPersos['Ville']; ?>">
		</p>
		<p>
			<label for="fixe">téléphone fixe :</label>    
			<input type="text" id="fixe" name="fixe" value="<?= $infosPersos['fixe']; ?>">
		</p>
		<p>
			<label for="mobile">mobile :</label>    
			<input type="text" id="mobile" name="mobile" value="<?= $infosPersos['mobile']; ?>">
		</p>
		<p>
			<label for="mail">mail :</label>    
			<input type="email" id="mail" name="mail" value="<?= $infosPersos['mail']; ?>">
		</p>

		<p class="textArea"><label for="partPeau">Particularités de peau :</label></p>
		<p><textarea name="partPeau" id="partPeau" cols="30" rows="10"><?= $infosPersos['particularites']; ?></textarea></p>
	</fieldset>
	<p class= "formButton">
		<input type="submit" value="Annuler">
		<input type="submit" value="Modifier">
	</p>
</form>