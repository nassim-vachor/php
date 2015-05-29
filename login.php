
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
		if (isset($_POST['connecter']) and isset($_POST['email1']) and isset($_POST['mdp1'])){
			$mail=$_POST['email1'];
			$pwd= sha1($_POST['mdp1']);


		    $sql = $bdd->query("SELECT * FROM client WHERE email = '$mail' AND motDepasse = '$pwd'");
		    $rowCount=$sql->rowCount();

		    if ($rowCount>0) {
					    	 $row =$sql->fetch();
						    // utilisateur trouvé, maintenant on va créer les cookies (s'il n'existe pas)
						    if(!isset($_COOKIE["id_client"]) and !isset($_COOKIE["token"])) 
						    {
						      $tokenValue=sha1(uniqid(rand()));   // création d'un nouveau token
						      $id=$row["id_client"];
						      setcookie("id_client",$id,time()+(3600),"/");  //création des cookies avec les valeurs $id et $tokenvalue
						      setcookie("token",$tokenValue,time()+(3600),"/");
						      $maj=$bdd->query("UPDATE client SET token ='$tokenValue' WHERE id_client = '$id' "); //on MAJ la BD
						     
						     header('location:connex.php');
						    }

		    }
		    
		  	else{
		  		echo"no";
		  	}
		  }
?>