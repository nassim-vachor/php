
<meta charset="utf-8"/>

<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=stade;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());
}

?>
<?php

if (isset ($_POST['inscrire']) and isset ($_POST['nom']) and isset ($_POST['prenom']) and isset ($_POST['tel']) and isset ($_POST['email']) and isset ($_POST['mdp'])){
	 if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) and preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['tel']))

    	{

        	$req = $bdd->prepare("INSERT INTO client(nom, prenom, tel, email, motDepasse)VALUES(?, ?, ?, ?, ?)");
			$req->execute(array($_POST ['nom'], $_POST['prenom'],  $_POST['tel'], $_POST['email'],sha1($_POST['mdp'])));


			header('Location:accueil.php');
		}

    else

    {

        echo 'L\'adresse ' . $_POST['email'] . ' ou le numéro de téléphone '.$_POST['tel'].' n\'est pas valide, recommencez !';

    }
}
?>

	