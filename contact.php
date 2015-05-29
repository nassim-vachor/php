<?php include("header.php"); ?> 
<article></article>






<?php
$reponse = $bdd->query('SELECT nom_terrain, image FROM terrain');

while ($donnees = $reponse->fetch())
{
	echo $donnees['image'] . '<br />';
?>

<img src=" <?php echo $donnees['image']; ?>" alt="logo">
<?php
}
$reponse->closeCursor();
?>

<!--
<?php
$reponse = $bdd->query('SELECT image FROM terrain');

 $donnees = $reponse->fetch();
	echo $donnees['image'] . '<br />';

$reponse->closeCursor();
?>
<img src=" <?php echo $donnees['image']; ?>" alt="logo">
-->