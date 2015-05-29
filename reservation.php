<?php include("header.php"); ?> 
		<article>
			<p> <strong>VACHOR STADIUM</strong>, resérvez en ligne, organisez vos matchs!</p> 

			<fieldset>
				<table>
					<tr>
						<th>Inscription</th>
						<th>Se connecter</th>
					<tr>
						<td>
							
						 	<form method="POST" action="inscription.php" >
							 	<div >
									    <label for="nom">Nom:</label>
									    <input type="text" name="nom" class="form-control" id="nom" required >
								</div>
								<div >
								    <label>Prénom:</label>
								    <input type="text" name="prenom" class="form-control" id="prenom" required>
								</div>
								<div >
								    <label for="tel">Téléphone:</label>
								    <input type="tel" name="tel" class="form-control" id="tel" placeholder="Ex:0658590481" required>
								</div>
								<div>
								  	
								  	<label for="email">Address email:</label>
								    <input type="email" name="email"class="form-control" id="email" placeholder="Ex:nass@hotmail.fr" required>
								</div>
								<div >
								    <label for="pwd">Mot de passe</label>
								    <input type="password" name="mdp" class="form-control" id="pwd" required>
								</div>
								  <button type="submit" name="inscrire" class="btn btn-default">S'inscrire</button>
							</form>
						</td>
						<td >
					
							<form method="POST" action="login.php" role="form">
								<div class="form-group">
								    <label for="email1">Address email:</label>
								    <input type="email" name="email1"class="form-control" id="email1" placeholder="Ex:nass@hotmail.fr" required>
								</div>
								<div class="form-group">
								    <label for="pwd1">Mot de passe</label>
								    <input type="password" name="mdp1" class="form-control" id="pwd1" required>
								</div>
				
								  <button type="submit" name="connecter" class="btn btn-default">Connexion</button>
							</form>
						</td>
					</tr>
				</table>
			</FIELDSET>

		</article>
		<footer>
	    </footer>
	</body>
</html>