<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type = "text/css" rel="stylesheet" href="commander.css">
    <script type="text/javascript" src="commander.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title> Commander </title>
</head>

<body class="bodyp">


    <h2> Résumé de votre commande </h2>
    <?php
    if (empty($_REQUEST['nombre']))
    $Quantite="NR";
    else
    $Quantite=$_REQUEST['nombre'];
    
    ?>

    <?php
    


    echo "<table class='table' border=2>
    <tr><th>Bière</th><th>Quantité(s)</th><th>Prix à l'unité</th></tr>
    <tr><td>La Printanière</td><td>$Quantite</td><td>10,99 €</td></tr>
    </table>";
    
    ?>
    <input type="hidden" id="variableAPasser" value="<?php echo $Quantite; ?>"/>
    <?php
//Base de donnée
if(!empty($_POST["send"])) {
	$prenom = $_POST["prenom"];
  $nom = $_POST["nom"];
	$email = $_POST["email"];
  $adresse = $_POST["adresse"];
  $paiement = $_POST["paiement"];



	$connexion = mysqli_connect("localhost", "root", "", "paiementinfo") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO infodepaiement (prenom, nom, email, adresse, paiement) VALUES ('" . $prenom. "', '" . $nom. "','" . $email. "','" . $adresse. "', '" . $paiement. "')");
	if($result){
		$db_msg = "Merci de votre commande !";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de votre commande.";
		$type_db_msg = "error";
	}
	
}
?>
<br>
    <div id="box">

		  <form id="form" enctype="multipart/form-data" onsubmit="return valider()" method="post">
      <link rel="stylesheet" href="commander.css">
		    <h3>Paiement de votre commande</h3>
		    <label>Prénom: <span>*</span></label>
		    <input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
            <br><br>
            <label>Nom: <span>*</span></label>
		    <input type="text" id="nom" name="nom" placeholder="Nom"/>
            <br><br>
		    <label>Email: <span>*</span></label><span id="info" class="info"></span>
		    <input type="text" id="email" name="email" placeholder="Email" size = "50"/>
            <br><br>
            <label>Adresse: <span>*</span></label><span id="info" class="info"></span>
		    <input type="text" id="adresse" name="adresse" placeholder="Adresse" size = "70"/>
        <br><br>
        <input type = "button" onclick="prix()" value = "Total à payer">
            <br><br>
        Total à payer: <input type="text" id="total" name="total">
        <br><br>
		    <select name="paiement">
            <option value = "paypal"> Paypal </option>
            <option value = "mastercard"> Mastercard </option>
            <option value = "visa"> Visa </option>
            <br><br>
		    <input type="number" id = "carte" name="carte" placeholder="Informations bancaires"/>
            <br><br>
		    <input type = "submit" id="payer" name = "send" value="Valider votre commande" onclick="return validation()"/>
		  </form>
	    </div>

   

    




    <script type="text/javascript" src="commander.js"></script>
</body>
</html>