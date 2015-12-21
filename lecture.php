<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<title>Lecture données</title>
</head>
<body>
<?php
//Récupération des données
$Sex=$_POST['sex'];
$Nom=strtoupper($_POST['nom']);
$Prenom=$_POST['prenom'];
$Email=$_POST['email'];
$Adresse_1=$_POST['adresse_1'];
$Adresse_2=$_POST['adresse_2'];
$Ville=strtoupper($_POST['ville']);
$CodePostal=$_POST['codePostal'];
$Pays=$_POST['pays'];
$i=0;
foreach ($_POST['loisir'] as $Temp) {
	$Loisir[$i] = $Temp;
	$i++;
}
$Remarques=$_POST['remarques'];
?>

<!-- Affichage sex, nom et prénom -->
<p><?php
if (!empty($Sex) OR !empty($Nom) OR !empty($Penom))
{
	echo $Sex, " ", $Nom, " ", $Prenom;
}
else
{
	echo "Sex, nom ou prénom non renseignée";
}
?></p>

<!-- Affichage email -->
<p><u>Votre adresse mail</u> : <?php 
if (!empty($Email)) {
	echo $Email; 
}
else
{
	echo "Email non renseignée";
}


?></p>

</br>

<p><u>Vous habitez</u> :</p>

<!-- Affichage Adresse -->
<p><?php 
if (!empty($Adresse_1)) {
	echo $Adresse_1;
}
else
{
	echo "Adresse non renseignée";
}
 

?></p>

<!-- Affichage Adresse suite (facultatif) -->
<?php if (!empty($Adresse_2)) {
	echo "<p>", $Adresse_2, "</p>";
} ?>

<!-- Affichage code postal -->
<p><?php 
if (!empty($CodePostal)) {
	echo $CodePostal, " ", $Ville;
}
else
{
	echo "Code Postal renseignée";
}
?></p>

<!-- Affichage pays -->
<p><?php 
if (!empty($Pays)) {
	echo $Pays;
}
else
{
	echo "Pays non renseignée";
}

?></p>

</br>

<!-- Affichage remarques -->
<p><u>Les remarques que vous nous avez faites</u> : <?php 
if (!empty($Remarques)) {
	echo $Remarques;
}
else
{
	echo "";
}

?></p>

</br>

<!-- Affichage loisirs -->
<p><u>Vos loisirs</u> :</p>
<?php 
if (!empty($Loisir[0])) {
	
	echo "<ul>";
	
	$n = count($Loisir);
		for ($i=0; $i < $n; $i++) { 
			echo "<li>", $Loisir[$i], "</li>";
		}
	echo "</ul>";
} ?>


</body>
</html>