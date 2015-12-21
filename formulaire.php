<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<head>
	<title>Formulaires</title>
</head>
<body>
<h1>Complétez ce formulaire</h1>
<form name="formulaire" method="POST" action="lecture.php">
	<!-- Sex --><p><input type="radio" name="sex" value="Mr"> Monsieur <input type="radio" name="sex" value="Mme"> Madame <input type="radio" name="sex" value="M"> Mademoiselle</p>
	<!-- Nom --><p>Nom :<input type="text" name="nom"></p>
	<!-- Prénom --><p>Prénom :<input type="text" name="prenom"></p>
	<!-- Email --><p>Email :<input type="email" name="email"></p>
	<!-- Adresse 1 --><p>Adresse :<input type="text" name="adresse_1"></p>
	<!-- Adresse 2 --><p><input type="text" name="adresse_2"></p>
	<!-- Ville --><p>Ville :<input type="text" name="ville"></p>
	<!-- Code Postal --><p>Code Postal :<input type="number" name="codePostal"></p>
	<!-- Pays --><p>Pays :
	<select name="pays">
		<option value="Allemagne">Allemagne</option>
		<option value="Belgique">Belgique</option>
		<option value="Espagne">Espagne</option>
		<option value="France">France</option>
		<option value="Grande Bretagne">Grande Bretagne</option>
		<option value="Italie">Italie</option>
	</select></p>
	<!-- Loisir --><p>Vos loisirs : Jeux<input type="checkbox" name="loisir[]" value="Jeux"> Informatique<input type="checkbox" name="loisir[]" value="Informatique">Cinéma<input type="checkbox" name="loisir[]" value="Cinéma">Sport<input type="checkbox" name="loisir[]" value="Sport">Dormir<input type="checkbox" name="loisir[]" value="Dormir"></p>
	<!-- Vos remarques --><p>Vos remarques :<textarea name="remarques" rows=10 cols=20></textarea></p>

	<p><input type="submit" value="OK"><input type="reset" value="Annuler"></p>
</form>
</body>
</html>