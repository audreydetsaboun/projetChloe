<form method="POST" action="../controllers/controllerUpdateClient.php">
	<fieldset>
		<legend>Informations personnelles</legend>
		<p>
			<label for="nom">nom :</label>    
			<input type="text" id="nom" name="nom" value="<?= $infosPersos['fixe']; ?>" required>
		</p>
		<p>
			<label for="prenom">prénom :</label>    
			<input type="text" id="prenom" name="prenom" value="<?= $infosPersos['fixe']; ?>" required>
		</p>
		<p>
			<label for="adresse">rue :</label>    
			<input type="text" id="rue" name="rue" value="<?= $infosPersos['fixe']; ?>" required>
		</p>
		<p>
			<label for="cp">CP :</label>    
			<input type="text" id="cp" name="cp" value="<?= $infosPersos['fixe']; ?>" required>
		</p>
		<p>
			<label for="ville">ville :</label>    
			<input type="text" id="ville" name="ville" value="<?= $infosPersos['fixe']; ?>" required>
		</p>
		<p>
			<label for="fixe">téléphone fixe :</label>    
			<input type="text" id="fixe" name="fixe" value="<?= $infosPersos['fixe']; ?>" required>
		</p>
		<p>
			<label for="mobile">mobile :</label>    
			<input type="text" id="mobile" name="mobile" value="<?= $infosPersos['fixe']; ?>" required>
		</p>

		<p class="textArea">
			<label for="partPeau">Particularités de peau :</label>  
		</p>
		<p>  
			<textarea name="partPeau" id="partPeau" cols="30" rows="10" required><?= $infosPersos['fixe']; ?>"</textarea>
		</p>
	</fieldset>
	<p class= "formButton">
		<input type="submit" value="Modifier">
		<input type="submit" value="Annuler">
	</p>
</form>