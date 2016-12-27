<!DOCTYPE html>
<html>
<style>
.error {color: red;}
</style>
   <title> Modifier profil </title>
<body>
  <div align=center>
  <h1> Modifier son profil : </h1>
  <fieldset>
  <legend><h2> Informations personnelles :</h2></legend>
  <fieldset>
					<legend><h3>Votre photo</h3></legend>
					<label for="avatar">Modifier votre image de contact :
					</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko)<br />				
			</fieldset>			
    <p>
	<p><span class="error">* Champs importants.</span></p>
    <form action="updateprofil.php" method="POST">
	<label for="ancmail"> Ancien mail :</label><br />
    <input type="email" name="ancmail" placeholder="Ancien mail" required /> <span class="error">*</span> </br>
	<label for="nvmail"> Nouveau mail :</label><br />
    <input type="email" name="nvmail" placeholder="Nouveau mail" required/> <span class="error">*</span></br>
	<label for="ancmdp"> Ancien mot de passe :</label><br />
    <input type="password" name="ancmdp" placeholder="Ancien mot de passe" required/><span class="error">*</span> </br>
	<label for="mdp"> Nouveau mot de passe :</label><br />
    <input type="password" name="nvmdp" placeholder="Nouveau mot de passe" required/><span class="error">*</span> </br>
	<label for="nombredemaison">Nombre de maison:</label>
								<select name="Type Utilisateur">
								<option value="choix1"></option>
								<option value="choix1">1</option>
							    <option value="choix2">2</option>
							    <option value="choix3">3</option>
							    <option value="choix4">4</option>
							    <option value="choix1">6</option>
							    <option value="choix2">7</option>
							    <option value="choix3">8</option>
							    <option value="choix4">9</option>
							    </select>
   </fieldset>	
     <fieldset>
	     <legend><h2> Informations domicile</h2></legend>		
						<label for="nombredepersonne">Nombre de personne :</label> </br>
						<input type="text" placeholder="Combien êtes vous ?" name="nombredepersonne"></br>
						<label for="nombredepiece">Nombre de pièces :</label></br>
						<input type="text" placeholder="nombre de pieces" name="nombredepiece"></br>
					    <label for="superficie">Superficie :</label></br>
						<input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
						<label for="typedepicece">Type de pièce:</label></br>
						<input type="text" placeholder="Type de pièce" name="nombredepersonne"></br>
    </fieldset>
    <fieldset>
         <legend><h3>Utilisateur(s)</h3></legend>
					Êtes vous l\'utilisateur principal ? 
						<input type="radio" name="utilisateurprincipal" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
							<input type="radio" name="utilisateurprincipal" value="non" id="non" /> <label for="non">Non</label>
							<br> <br />
							<select name="typeutilisateur">
							    <option value="choix1">Utilisateur principal</option>
							    <option value="choix2">Utilisateur secondaire </option>
							    <option value="choix3">Utilisateur sécurisé</option>
							    <option value="choix4">Autre</option>
							</select>
				</fieldset></br>
				<input type="submit" name="formeinscription" value="Enregistrer les modifications" /></p>
	</form>

</body>
</html>